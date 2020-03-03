<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AccountDeleted extends Notification implements ShouldQueue
{
    use Queueable;

    private $userName;
    
    public function __construct(User $user)
    {
        $this->userName = $user->name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }
    
    public function toMail($notifiable)
    {
        return (new MailMessage())->view('emails.account_deleted', ['userName' => $this->userName]);
    }
}
