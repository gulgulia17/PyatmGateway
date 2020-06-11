<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticate;

class Admin extends Authenticate
{
    use Notifiable;
    protected $guard = 'admin';
    protected $fillabel = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
        'password',
    ];
}
