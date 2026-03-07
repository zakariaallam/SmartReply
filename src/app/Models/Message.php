<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable =[
       'business_id',
       'sender',
       'message'
    ];

    public function business(){
        return $this->belongsTo(Businesse::class);
    }
}
