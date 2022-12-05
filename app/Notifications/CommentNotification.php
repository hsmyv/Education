<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CommentNotification extends Notification
{
    use Queueable;
    public $reply;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($reply, $post)
    {
        $this->reply = $reply;
        $this->post = $post;
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

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [

            'comment' => $this->reply['body'],
            'user' =>  $this->reply['user_id'],
            'name' => $this->reply['name'],
            'slug'  => $this->post->slug,
            'time' => $notifiable['created_at']
        ];
    }
}
