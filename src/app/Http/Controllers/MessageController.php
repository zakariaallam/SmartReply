<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\services\OpenRouterAIService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index(){
        $business = Auth::user()->business;
        return response()->json([
            'message' => $business->messages,
        ]);
    }

    public function send(Request $request){
        $request->validate([
            'message' => 'required|string'
        ]);

        $business = Auth::user()->business;

        $clientMessage = Message::create([
            'business_id' => $business->id,
            'sender' => 'client',
            'message' => $request->message
        ]);

        $aiResponse = $this->generateResponse($business,$request->message);

        $aiMessage = Message::create([
            'business_id' => $business->id,
            'sender' => 'ai',
            'message' => $aiResponse
        ]);

        return response()->json([
            'client' => $clientMessage,
            'AI' => $aiMessage,
        ],201);
    }

    public function generateResponse($business,$message){

       $ai = new OpenRouterAIService();

       return $ai->regenerateResponse($business,$message);
    }
}
