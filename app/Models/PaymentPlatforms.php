<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentPlatforms extends Model
{
    protected $fillable=[
        'name',
        'photo_id',
        'subscription_enabled'


    ];

    use HasFactory;
}
