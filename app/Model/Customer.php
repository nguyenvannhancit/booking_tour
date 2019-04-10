<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['id', 'name', 'adress', 'email', 'gender', 'identity_card', 'phone', 'created_at', 'updated_at'];
    public $timestamp = true;
}
