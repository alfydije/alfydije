<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Akun as Authenticatable;
use Illuminate\Notification\Notifable;
use Spatie\Permission\Traits\HasRoles;

class Akun extends Authenticatable
{
    use Notifable, HasRoles;

    protected $fillable = [
        'nama',
        'email',
        'role',
        'password',
    ];
}
