<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'business_id',
        'price',
        'description'
    ];

    public function business(){
        return $this->belongsTo(Businesse::class);
    }
    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
