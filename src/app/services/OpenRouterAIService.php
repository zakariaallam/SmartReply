<?php

namespace App\services;

use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OpenRouterAIService
{

    public function regenerateResponse($business, $message)
    {
        $user = $business->user;
        $services = $business->services;
        $result = "";
        foreach($business->working_hours as $wh){
            $result .= $wh['day'] . ": " . $wh['from'] ."-" . $wh['to']. ", ";
        }

        $result = rtrim($result,', ');


        $serviceText = "";
        $currentYear = date("Y/m/d");

        foreach ($services as $service) {
            $serviceText .= "(
                         - serviece name : $service->name 
                         - service price : $service->price
                         - service description : $service->description
                         - service working hours : $result
                          )";
        }

        $prompt = '
                You are the owner' . $user->first_name .'of the business.

                Always detect the user intent.

                If the user is asking a question return:     
                {
                  "type":"question",
                   "reply":"your friendly answer"
                }

                If the user wants to book an appointment return:

                {
                    "type":"booking",
                    "service":"service name",
                    "date":"YYYY-MM-DD",
                    "time":"HH:MM"
                }
                Business services:
                ' . $serviceText . '

                Instructions:
                - Be natural like a human.
                - inswre from data Business services  
                - Answer in ' . $business->language . '
                - If the user gives a date without a year or month , this is date now: '. $currentYear .'
                - Be short and friendly
                ';
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

    public function checkTypeMessage($data , $to){
        $data = json_decode($data,true);

        if($data['type'] == 'booking'){
            $service = Service::where('name',$data['service'])->first();
            if(!$service){
                return 'service not found' . $data['service'];
            }
            foreach($service->appointments as $appointment){
                if($appointment->date == $data['date'] && $appointment->time == $data['time']){
                    return 'Sorry this time is already booked.';
                }
            }
            Appointment::create([
                'date' => $data['date'],
                'time' => $data['time'],
                'client_phone' => $to,
                'status' => 'pending',
                'service_id' => $service->id,
            ]);

            return "Your appointment is confirmed for ".$data['date']." at ".$data['time'];
        }else if($data["type"] == 'question'){
            return $data['reply'];
        }

    }

}
