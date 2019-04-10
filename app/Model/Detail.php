<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'details';
    protected $fillable = ['id', 'tour_id', 'price', 'start_day', 'end_day', 'created_at', 'updated_at'];
    public $timestamp = true;
}
