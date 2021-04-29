<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trucks extends Model
{
    protected $fillable=[
        'type_id',
        'ref',
        'contact',
        'origin',
        'dh_o',
        'destination',
        'dh_d',
        'length',
        'weight',
        'full',
        'startDate',
        'endDate',
        'comments',
        


    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }


    use HasFactory;
}
