<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\HtmlString;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ContactUs extends Notification
{
    use Queueable;
    private $contactData;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($contactData)
    {
        $this->contactData = $contactData;
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
        if(!empty($this->contactData['website'])){
            return (new MailMessage)
                    ->line('Client Contact Us Details')
                    ->line(new HtmlString('Name: <strong>' . $this->contactData['name'] . '</strong>'))
                    ->line(new HtmlString('Email: <strong>' . $this->contactData['email'] . '</strong>'))
                    ->line(new HtmlString('Phone: <strong>' . $this->contactData['phone'] . '</strong>'))
                    ->line(new HtmlString('Website: <strong>' . $this->contactData['website'] . '</strong>'))
                    ->line(new HtmlString('Message: <strong>' . $this->contactData['message'] . '</strong>'))
                    ->line('Thank you for using our application!');
        }else{
            return (new MailMessage)
            ->line('Client Contact Us Details')
            ->line(new HtmlString('Name: <strong>' . $this->contactData['name'] . '</strong>'))
            ->line(new HtmlString('Email: <strong>' . $this->contactData['email'] . '</strong>'))
            ->line(new HtmlString('Phone: <strong>' . $this->contactData['phone'] . '</strong>'))
            ->line(new HtmlString('Message: <strong>' . $this->contactData['message'] . '</strong>'))
            ->line('Thank you for using our application!');
        }
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
