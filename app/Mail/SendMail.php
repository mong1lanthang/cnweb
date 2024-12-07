<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public $booking)
    {
        //
        $this->booking = $booking;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mail xác nhận thông tin đặt tour',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $confirmationUrl = url(route('confirm.booking', ['token' => $this->booking->booking_token])); // Tạo URL xác nhận
        return new Content(
            view: 'send_mail',
            with: [
                'booking' => $this->booking, // Truyền $booking vào view email
                'confirmationUrl' => $confirmationUrl, // Truyền URL vào view
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
