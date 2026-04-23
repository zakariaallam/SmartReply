<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
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

        return response()->json([
            'status' => true,
            'message' => 'create Appointement successfilly',
            'appointement' => $appointement
        ],201);
    }
}
