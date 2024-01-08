<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inputdata extends Model
{
    use HasFactory;
    protected $table = 'inputdata';
    protected $fillable = ['title', 'description', 'image_path'];
}
