<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{
    public function update(Request $request){
        $validate = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'language' => 'required|string',
            'working_hours' => 'required|array',
        ]);

        $business = Auth::user()->business;

        $business->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'language' => $request->language,
            'working_hours' => $request->working_hours
        ]);

        return response()->json([
            'message' => 'Business Update',
            'business' => $business,
        ],204);
    }

    public function show(){
        return response()->json(Auth::user()->business);
    }
}
