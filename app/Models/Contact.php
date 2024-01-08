<?php

namespace App\Models;
use Illuminate\Foundation\Auth\Contact as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'address', 'message'];
}
