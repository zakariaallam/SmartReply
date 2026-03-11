<?php

namespace App\Http\Controllers;

use App\Models\Businesse;
use App\services\OpenRouterAIService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Twilio\Rest\Client;

class WhatsAppController extends Controller
{
    public function receive(Request $request){
        // Log::info('Webhook received', $request->all());
        $message = $request->input('Body');
        $from = $request->input('From');
        $number = str_replace('whatsapp:',"",$from);
        $business = Businesse::where('phone', $number)->first() ;
        if(!$business){
            return response()->json(['success' => false]);
        }
        $aiService = new OpenRouterAIService();
        $replay = $aiService->regenerateResponse($business,$message);

        $this->sendMessage($from,$replay);

        return response()->json(['success' => true]);
        // return response('OK',200);
    }

    public function sendMessage($to,$message){
        $client = new Client(env('TWILIO_SID'),env('TWILIO_TOKEN'));
        $client->messages->create($to,[
            'from' => env('TWILIO_WHATSAPP_FROM'),
            'body' => $message
        ]);
    }
}
