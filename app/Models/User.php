<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'is_active',
        'photo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function photo(){

        return $this->belongsTo(Photo::class);

    }

    public function isAdmin(){

        if($this->role->name == 'admin' && $this->is_active == 1){

            return true;

        }

        return false;

    }


    public function isShipper(){

        if($this->role->name == 'shipper' && $this->is_active == 1){

            return true;

        }

        return false;

    }

    public function isCarrier(){

        if($this->role->name == 'carrier' && $this->is_active == 1){

            return true;

        }

        return false;

    }

    
    public function isBroker(){

        if($this->role->name == 'broker' && $this->is_active == 1){

            return true;

        }

        return false;

    }
    
    

    public function trucks(){

        return $this->hasMany(Trucks::class);
    }

    public function loads(){

        return $this->hasMany(Loads::class);
    }

    public function verify(){

        return $this->hasMany(BusinessVerify::class);
    }

    public function subscription(){

        return $this->hasOne(Subscription::class);
    }

    public function hasActiveSubscription(){
        //the user has subscription and its not null when we call is active than it returns true 
        //but if the subscription is not acive than it returns false
        //user doesnt have subscription than its null and returns false
        return optional($this->subscription)->isActive() ?? false;
    }





}
