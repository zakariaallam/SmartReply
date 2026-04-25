<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function showNotification(){
       $user = auth('api')->user();
       $notification = $user->notifications;

       return response()->json([
        'status' => true,
        'notifications' => $notification
       ]);
    }
}
