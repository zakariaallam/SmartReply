<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Businesse extends Model
{
    protected $fillable = [
        'name',
        'description',
        'address',
        'phone',
        'user_id',
        'language',
        'working_hours',
    ];

    protected $casts = ['working_hours' => 'array'];

    public function user(){
       return $this->belongsTo(User::class);
    }

    public function services(){
        return $this->hasMany(Service::class,'business_id');
    }
    public function messages(){
        return $this->hasMany(Message::class);
    }
}
