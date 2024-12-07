<?php

namespace App\Notifications;

use App\Models\booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public $booking)
    {
        //
        $this->booking = $booking;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->from('datdnk3@gmail.com', 'Lua Viet Tours')
            ->subject('Thông báo đặt tour mới')
            ->line('Có một khách hàng mới đã đặt tour từ ' . $this->booking->booking_email)
            ->line('Tên tour: ' . $this->booking->booking_ten_tour)
            ->line('Tên khách hàng: ' . $this->booking->booking_ho_ten)
            ->action('Xem chi tiết', url('/admin/order_list'))
            ->line('Cảm ơn bạn đã sử dụng ứng dụng của chúng tôi!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray($notifiable): array
    {
        return [
            //
        ];
    }
}
