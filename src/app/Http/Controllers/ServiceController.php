<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function create(){
        return response()->json(['message' => 'page create service']);
    }

    public function store(Request $request){
         $validate =  $request->validate([
            'name' => 'required|string|min:4',
            'price' => 'required|integer',
            'description' => 'string'
         ]);

         $business = Auth::user()->business;
         $validate['business_id'] = $business->id;

         $service = Service::create($validate);

         return response()->json([
            'message' => 'service created successfully',
            'service' => $service
         ],201);
    }

    public function edit($id){
        $service = Service::findOrFail($id);

      return response()->json([
        'message' => 'service pour modifier',
        'service' => $service
      ]);
    }

    public function update(Request $request ,$id){
        $service = Service::findOrFail($id);

        if($service->business_id != Auth::user()->business->id){
            return response()->json([
                'message' => 'unauthorized ',
                'x' => $service->business_id
            ],403);
        }

        $request->validate([
            'name' => 'nullable|string|min:4',
            'price' => 'nullable|integer',
            'description' => 'string'
        ]);
        if($request->has('name')){
            $service->name = $request->name;
        }
        if($request->has('price')){
            $service->price = $request->price;
        }
        if($request->has('description')){
            $service->description = $request->description;
        }
        $service->save();
        return response()->json([
            'message' => 'service updated',
            'service' => $service
        ]);
    }

    public function delete($id){
       $service = Service::findOrFail($id);

       if($service->business_id != Auth::user()->business->id){
            return response()->json([
                'message' => 'unauthorized ',
                'x' => $service->business_id
            ],403);
        }

        $service->delete();
        
        return response()->json([
            'message' => 'service delete',
        ]);
    }
}
