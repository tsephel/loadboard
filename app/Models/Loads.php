<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loads extends Model
{
    protected $fillable=[
        'type_id',
        'ref',
        'contact',
        'origin',
        
        'destination',
        'dock',
        'length',
        'weight',
        'full',
        'startDate',
        'offer',
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
