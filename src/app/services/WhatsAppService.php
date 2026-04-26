<?php

namespace App\Services;

use Twilio\Rest\Client;

class WhatsAppService
{
    public static function send($to, $message)
    {
        $client = new Client(env('TWILIO_SID'), env('TWILIO_TOKEN'));

        $client->messages->create(
            "whatsapp:$to",
            [
                'from' => env('TWILIO_WHATSAPP_FROM'),
                'body' => $message
            ]
        );
    }
}