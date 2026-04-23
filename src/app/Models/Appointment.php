<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['date','time','client_phone','status','service_id','user_id'];

    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
