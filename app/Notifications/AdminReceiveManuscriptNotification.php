<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminReceiveManuscriptNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public array $manuscript)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Ilaro Journal of Humanities and Management (IJHM)')
            ->line('Dear Admin,')
            ->line('Author ' . $this->manuscript['user'] . ' has successfully sent a manuscript.')
            ->line('Title: ' . $this->manuscript['title'])
            ->line('File name: ' . $this->manuscript['file'])
            ->line('Abstract: ' . $this->manuscript['abstract'])
            ->line('Kindly check your dashboard to attend to the file');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
