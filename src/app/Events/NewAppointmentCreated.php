<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewAppointmentCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $appointment;
    public $business_id;
    public function __construct($appointment , $business_id)
    {
        $this->appointment = $appointment;
        $this->business_id = $business_id;
    }

   
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('business.' . $this->business_id),
        ];
    }

    public function broadcastAs(){
        return 'appointment.created';
    }

    public function broadcastWith(){

       return [
            'message' => 'New appointment 🔔',
            'appointment_id' => $this->appointment->id,
            'date' => $this->appointment->date,
            'time' => $this->appointment->time,
       ];
    }
}
