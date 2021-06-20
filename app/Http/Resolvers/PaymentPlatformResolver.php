<?php

namespace App\Http\Resolvers;

use App\Models\PaymentPlatforms;

class PaymentPlatformResolver
{
    protected $paymentPlatforms;

    public function __construct()
    {

        $this->paymentPlatforms = PaymentPlatforms::all();
        
    }

    public function resolveService($paymentPlatformId){

        $name = strtolower($this->paymentPlatforms->firstWhere('id', $paymentPlatformId)->name);

        $service = config("services.{$name}.class");

        if($service){
            return resolve($service);
        }

        throw new \Exception('The selected platform is not in the configuration');
        

    }

}