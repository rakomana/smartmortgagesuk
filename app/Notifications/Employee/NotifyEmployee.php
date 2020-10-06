<?php

namespace App\Notifications\Employee;

use App\User;
use App\Quote;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyEmployee extends Notification
{
    use Queueable;

    /*
    * @var Quote
    * @var User
    */
    public $quote;
    public $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Quote $quote, User $user)
    {
        $this->quote = $quote;
        $this->user = $user;
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

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('New Task')
                    ->greeting('Hello ' .$this->user->name)
                    ->line('You have been assigned a new task on '.$this->quote->mortgage_type. ' Enquiry, please attend to it, search by '.$this->quote->email)
                    ->action('Open Dashboard', url('https://smartmortgagesuk.com/admin'))
                    ->line('Thank you!');
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
            //
        ];
    }
}
