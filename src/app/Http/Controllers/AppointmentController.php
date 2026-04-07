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
}
