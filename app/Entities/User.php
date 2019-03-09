<?php

namespace App\Entities;

use Illuminate\Support\Facades\Hash;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
   
    // use softDeletes;
    use Notifiable;

    public $timestamps = true;

    protected $table = 'tb_users';
    
    protected $fillable = [
        'nameuser',
        'services',
        'cpf',
        'login',
        'phone',
        'email',
        'password',
        'status',
        'nivel',
        'permission',
    ];
    protected $hidden = ['password', 'remember_token'];

    
   
}
