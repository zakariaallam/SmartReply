<?php

namespace App\Http\Controllers;

use App\Models\Businesse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BusinessController extends Controller
{
    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048'
        ]);


        $file = $request->file('image');

        if (!$file) {
            return response()->json(['error' => 'No file received'], 422);
        }

        $path = Storage::disk('s3')->putFile('image', $file);

        if (!$path) {
            return response()->json([
                'status' => false,
                'mmessage' => 'error ',
                'path' => $path
            ]);
        }

        $url = Storage::disk('s3')->url($path);

        $business = Businesse::where('user_id', auth('api')->user()->id)->first();
        $business->cover_url = $url;
        $business->save();
        return response()->json([
            'status' => true,
            'message' => 'image uploaded',
            'url' => $url
        ], 200);
    }
    public function update(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'language' => 'required|string',
            'working_hours' => 'required|array',
        ]);

        $business = auth('api')->user()->business;

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
        ], 204);
    }

    public function updateWorkHours(Request $request){
           $validate = $request->validate([
            'working_hours' => 'required|array',
        ]);

        $business = auth('api')->user()->business;

        $business->update([
            'working_hours' => $request->working_hours
        ]);

        return response()->json([
            'message' => 'Business Update',
            'business' => $business,
        ], 204);
    }

    public function getAllBuinesses()
    {
        return response()->json([
            'status' => true,
            'data' => Businesse::all()
        ]);
    }
    public function getBuinesses($id)
    {
        $business = Businesse::where('id',$id)->first();
        return response()->json([
            'status' => true,
            'data' => $business
        ]);
    }

    public function detailRocommand($id){
        $business = Businesse::where('id',$id)->first();
        $services = $business->services;

        return response()->json([
            'status' => true,
            'business' => $business,
            'services' => $services,
        ]);
     }
}
