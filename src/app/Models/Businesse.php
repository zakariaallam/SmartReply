<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnArgument;

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
       return $this->belongsTo(User::class,'business_id');
    }

    public function services(){
        return $this->hasMany(Service::class,'business_id');
    }
    public function messages(){
        return $this->hasMany(Message::class,'business_id');
    }

    public function teams(){
        return $this->hasMany(Team::class,'business_id');
    }
}
