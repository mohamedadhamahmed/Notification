<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreatePost extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    private $post_id;
     private $user_create;
    public function __construct($post_id,$user_create)
    {

        $this->post_id=$post_id;
        //
        $this->user_create=$user_create;
        print($this->user_create);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    
    public function toArray($notifiable)
    {
        return [
            //
            'post_id'=>$this->post_id,
            'user_create'=>$this->user_create
        ];
    }
}
