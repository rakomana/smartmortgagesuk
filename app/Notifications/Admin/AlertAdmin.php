<?php

namespace App\Notifications\Admin;

use App\Quote;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AlertAdmin extends Notification
{
    use Queueable;

    /**
    * @var Quote
    */
    public $quote;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Quote $quote)
    {
        $this->quote = $quote;
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
        $quote = $this->quote;

        return (new MailMessage)
                    ->subject('New Quote')
                    ->line($quote->first_name.' has enquired on '.$quote->mortgage_type)
                    ->line('Please attend as soon as possible!')
                    ->action('Open Dashboard', url('/'));
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
