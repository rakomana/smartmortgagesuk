<?php

namespace App\Notifications\User;

use App\Quote;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class QuoteEnquiry extends Notification
{
    use Queueable;

    /*
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
        return (new MailMessage)
                    ->subject($this->quote->mortgage_type. ' Enquiry')
                    ->greeting('Hello ' .$this->quote->last_name)
                    ->line('Thank you for '.$this->quote->mortgage_type. ' enquiry our advisor will contact you shortly')
                    ->action('In the meantime stay connected', url('htpp://www.princesolutions.co.za'))
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
