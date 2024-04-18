<?php

namespace App\Notifications;

use App\Models\Receipt;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class sendReceipt extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    /** @var Receipt */
    public $receipt;

    public function __construct(
        Receipt $receipt
    ) {
        $this->receipt = $receipt;
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
        return (new MailMessage())
                    ->line('Olá, você recebeu um novo recibo.')
                    ->action('Notification Action', route('receipt.download', ['receipt' => $this->receipt->id]))
                    ->line('Thank you for using our application!');
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
