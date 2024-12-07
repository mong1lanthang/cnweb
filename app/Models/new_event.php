<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class new_event extends Model
{
    //
    protected $table = "tbl_new_event";
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y'); // Hoặc 'Y-m-d' tùy theo định dạng bạn muốn
    }
}
