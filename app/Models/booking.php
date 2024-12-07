<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = "tbl_booking";
    use Notifiable;
    public function routeNotificationForMail($notification)
    {
        return $this->booking_email; // Sử dụng trường booking_email trong model
    }
}
