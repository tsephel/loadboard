<?php

namespace App\Http\Controllers;

use App\Http\Resolvers\PaymentPlatformResolver;
use Illuminate\Http\Request;

use App\Models\Plan;
use App\Models\PaymentPlatforms;

use App\Http\Services\PaypalService;
use App\Models\Subscription;

use Illuminate\Support\Facades\Session;

class SubscriptionController extends Controller
{

    protected $paymentPlatformResolver;


    public function __construct(PaymentPlatformResolver $paymentPlatformResolver){
        $this->middleware('auth');

        $this->paymentPlatformResolver = $paymentPlatformResolver;

    }
 

    public function show(){

        $plans = Plan::all();
        $paymentPlatforms = PaymentPlatforms::where('subscription_enabled', true)->get();

        return view('frontend.subscription', compact('plans', 'paymentPlatforms'));

    }


    public function store(Request $request){

        $rules=[
            'plan' => ['required', 'exists:plans,slug'],
            'payment_platform' =>['required', 'exists:payment_platforms,id'],
        ];

        $request->validate($rules);

        $paymentPlatform = $this->paymentPlatformResolver->resolveService($request->payment_platform);

        session()->put('subscriptionPlatformId', $request->payment_platform);

        return $paymentPlatform->handleSubscription($request);
        
    }


    public function approval(Request $request){
        $rules = [
            'plan' => ['required', 'exists:plans,slug'],
        ];

        $request->validate($rules);

                $plan = Plan::where('slug', $request->plan)->firstOrFail();
                $user = $request->user();
        
                Subscription::create([
                    'active_until' => now()->addDays($plan->duration_in_days),
                    'user_id' => $user->id,
                    'plan_id' => $plan->id,
                ]);

                Session::flash('approve_subscription', "Thanks, {$user->name}. Your have now a {$plan->slug} subscription. Start using it now.");
        
                return redirect()->route('home');

        // if(session()->has('subscriptionPlatformId')){ 
        //     $paymentPlatform = $this->paymentPlatformResolver->resolveService(session()->get('subscriptionPlatformId'));
        
        //     if($paymentPlatform->validateSubscription($request)){

        //         $plan = Plan::where('slug', $request->plan)->firstOrFail();
        //         $user = $request->user();
        
        //         Subscription::create([
        //             'active_until' => now()->addDays($plan->duration_in_days),
        //             'user_id' => $user->id,
        //             'plan_id' => $plan->id,
        //         ]);

        //         Session::flash('approve_subscription', "Thanks, {$user->name}. Your have now a {$plan->slug} subscription. Start using it now.");
        
        //         return redirect()->route('home');
    
        //     }
        // }

        // Session::flash('try_subscription', "Try again please");

        // return redirect()->route('subscribe.show');


    }


    public function cancelled(){

        Session::flash('cancle_subscription', "You cancelled. Come back whenever you're ready.");

        return redirect()->route('subscribe.show');
    }
}
