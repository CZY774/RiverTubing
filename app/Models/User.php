<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 
        'password',
        'last_login'
    ];

    protected $hidden = [
        'password'
    ];

    protected $casts = [
        'last_login' => 'datetime'
    ];
}