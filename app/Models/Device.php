<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use laravel\Sanctum\HasApiTokens;

class Device extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['name', 'token'];
}
