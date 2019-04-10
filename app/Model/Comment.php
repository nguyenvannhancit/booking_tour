<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['id', 'user_id', 'tour_id', 'name', 'content', 'created_at', 'updated_at'];
    public $timestamp = true;
}
