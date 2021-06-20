<?php

namespace App\Http\Services;

use App\Http\Traits\ConsumExternalServices;
// use GuzzleHttp\Psr7\Request;

use GuzzleHttp\Exception\ClientException ;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PaypalService{

    use ConsumExternalServices;

    protected $baseUri;
    protected $clientId;
    protected $clientSecret;
    protected $plans;

    public function __construct()
    {
        $this->baseUri = config('services.paypal.base_uri');
        $this->clientId = config('services.paypal.client_id');
        $this->clientSecret = config('services.paypal.client_secret');
        $this->plans = config('services.paypal.plans');
    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers){
        
        $headers['Authorization'] = $this->resolveAccessToken();
    }

    public function decodeResponse($response){
        
        return json_decode($response);
    }

    public function resolveAccessToken(){

        $credentials = base64_encode("{$this->clientId}:{$this->clientSecret}");

        return "Basic {$credentials}";
    }

    public function handleSubscription(Request $request){

       $subscription = $this->createSubscription(
            $request->plan,
            $request->user()->name,
            $request->user()->email,
       );

       $subscriptionLinks = collect($subscription->links);
       $approve = $subscriptionLinks->where('rel', 'approve')->first();

       session()->put('subscriptionId', '$subscription->id');
       
       return redirect($approve->href);
    }

    // public function validateSubscription(Request $request){
    //     if(session()->has('subscriptionId')){

    //         $subscriptionId = session()->get('subscriptionId');

    //         session()->forget('subscriptionId');

    //         return $request->subscription_id == $subscriptionId;

    //     }

    //     return false;
    // }



    public function createSubscription($slug, $name, $email){
        return $this->makeRequest(
            'POST',
            '/v1/billing/subscriptions',
            [],
            [
                'plan_id' => $this->plans[$slug],
                'subscriber' => [
                    'name' => [
                        'given_name' => $name,
                    ],
                    'email_address' => $email
                ],

                'application_context' => [
                    'brand_name' => config('app.name'),
                    'shipping_preference' => 'NO_SHIPPING',
                    'user_action' => 'SUBSCRIBE_NOW',
                    'return_url' => route('subscribe.approval', ['plan' => $slug]),
                    'cancel_url' => route('subscribe.cancelled'),
                    ]

                ],
                [],
                $isJsonRequest = true,
            );

        // try {
        //     // your code here
        //     return $this->makeRequest(
        //         'POST',
        //         '/v1/billing/subscriptions',
        //         [],
        //         [
        //             'plan_id' => $this->plans[$slug],
        //             'subscriber' => [
        //                 'name' => [
        //                     'given_name' => $name,
        //                 ],
        //                 'email_address' => $email
        //             ],
    
        //             'application_context' => [
        //                 'brand_name' => config('app.name'),
        //                 'shipping_preference' => 'NO_SHIPPING',
        //                 'user_action' => 'SUBSCRIBE_NOW',
        //                 'return_url' => route('subscribe.approval', ['plan' => $slug]),
        //                 'cancel_url' => route('subscribe.cancelled'),
        //                 ]
    
        //             ],
        //             [],
        //             $isJsonRequest = true,
        //         );

        //   } catch(\Throwable $th) {
        //     if ($th instanceof ClientException) {
        //        $r = $th->getResponse();
        //        $responseBodyAsString = json_decode($r->getBody()->getContents());
        //        dd($responseBodyAsString);
        //     }
        //   }

       
    }

}