<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewAppointmentNotification extends Notification
{
    use Queueable;

    protected $appointement;
    public function __construct($appointement)
    {
        $this->appointement = $appointement;
    }

    
    public function via(object $notifiable): array
    {
        return ['database','broadcast'];
    }

   public function toDatabase($notifiable){
    return[
        'message' => 'new appointement',
        'appointement_id' => $this->appointement->id,
        'date' => $this->appointement->date,
        'time' => $this->appointement->time
    ];
   }

   public function toBroadcast($notifiable){
      
      return new BroadcastMessage([
        'message' => 'new appointement',
        'appointement_id' => $this->appointement->id,
      ]);
   }

    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
