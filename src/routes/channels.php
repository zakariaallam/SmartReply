<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('business.{id}', function ($user,$id){
    logger($user);
    return  $user->business->id === (int) $id;
});