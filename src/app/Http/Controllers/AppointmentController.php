<?php

namespace App\Http\Controllers;

use App\Events\NewAppointmentCreated;
use App\Models\Appointment;
use App\Models\User;
use App\Notifications\NewAppointmentNotification;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        $appointement = Appointment::where('status','pending')->get();

        return response()->json([
            'status' => true,
            'data' => $appointement
        ]);
    }

    public function store(Request $request){
        $user = auth('api')->user();
        
        $validate = $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'service_id' => 'required|integer',
        ]);

        $validate['user_id'] = $user->id;
        $validate['client_phone'] = $user->phone;
        $appointement = Appointment::create($validate);

        // notification 
        $business = $appointement->service->business;
        $owner = User::where('id',$business->user_id)->first();
        $owner->notify(new NewAppointmentNotification($appointement));

        // Event 
        broadcast(new NewAppointmentCreated($appointement,$business->id));

        return response()->json([
            'status' => true,
            'message' => 'create Appointement successfilly',
            'appointement' => $appointement
        ],201);
    }

    public function getAllAppointementByUser(){
        $user = auth('api')->user();

        $appointement = $user->appointments;
        // $business = $appointement->service->business;

        return response()->json([
            'status' => true,
            'message' => 'appointement and business',
            // 'business' => $business,
            'appointments' => $appointement,
        ]);
    }
}
