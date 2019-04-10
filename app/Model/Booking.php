<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = ['id', 'user_id', 'customer_id', 'detail_id', 'status', 'status_payment', 'price', 'qty', 'created_at', 'updated_at'];
    public $timestamp = true;
}
