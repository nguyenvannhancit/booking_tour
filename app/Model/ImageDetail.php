<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ImageDetail extends Model
{
    protected $table = 'image_details';
    protected $fillable = ['id', 'mediable_id', 'primediable_type', 'image_detail', 'created_at', 'updated_at'];
    public $timestamp = true;
}