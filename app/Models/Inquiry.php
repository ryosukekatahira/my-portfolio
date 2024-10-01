<?php

// app/Models/Inquiry.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    // マスアサインメントを許可するカラムを指定
    protected $fillable = ['name', 'email', 'message'];
}
