<?php

namespace App\Http\Controllers;

use App\Models\Businesse;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'nullable|string',
            'service_id' => 'required|integer'
        ]);

        $validate['business_id'] = auth('api')->user()->business->id;

        Team::create($validate);

        return response()->json([
            'status' => true,
            'message' => 'member is created successfully'
        ], 201);
    }

    public function getAllMembers()
    {
        return response()->json([
            'status' => true,
            'message' => 'all members',
            'data' => auth('api')->user()->business->teams
        ]);
        
    }
    public function getAllMembersdetail($id)
    {
            $business = Businesse::where('id',$id)->first();
            return response()->json([
            'status' => true,
            'message' => 'all members detail',
            'data' => $business->teams
        ]);
        
    }
}
