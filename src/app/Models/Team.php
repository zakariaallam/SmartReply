<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name','description','business_id','service_id','is_active'];

    public function business(){
        return $this->belongsTo(Businesse::class,);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
