<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessVerify extends Model
{
    protected $fillable=[
        'name',
        'status',
        'photo_id',
        
    ];

    public function photo(){

        return $this->belongsTo(Photo::class);

    }

    public function user(){

        return $this->belongsTo(User::class);

    }

    use HasFactory;
}
