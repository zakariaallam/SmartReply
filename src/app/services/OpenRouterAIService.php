<?php

namespace App\services;

use Illuminate\Support\Facades\Http;

class OpenRouterAIService
{

    public function regenerateResponse($business, $message)
    {
        $services = $business->services;

        $serviceText = "";

        foreach ($services as $service) {
            $serviceText .= "(
                         - serviece name : $service->name 
                         - service price : $service->price
                         - service description : $service->description
                          )";
        }

        $prompt = "
                You are an assistant for a small business.

                Business services:
                $serviceText

                Instructions:
                - Answer in $business->language
                - Be short and friendly
                - Use prices from the list
                ";


        $response = Http::withToken(env('OPENROUTER_API_KEY'))
                    ->post('https://openrouter.ai/api/v1/chat/completions',[

                        "model" => "deepseek/deepseek-v3.2",
                        "messages" => [
                            [
                                "role" => 'system',
                                "content" => $prompt
                            ],
                            [
                                "role" => 'user',
                                "content" => $message
                            ]
                        ],
                        "temperature" => 0.7
                    ]);

                    return $response->json()['choices'][0]['message']['content'] ?? 'error';
    }

}
