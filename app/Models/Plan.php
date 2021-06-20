<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable=[
        'slug',
        'price',
        'duration_in_days',

    ];

    public function subscriptions(){

        return $this->hasMany(Subscription::class);  
          
    }

    use HasFactory;
}
