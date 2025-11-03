<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'phone',
        'blood_type',
        'gender',
        'location',
        'last_donation',
        'dob',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Helper
    public function isDonor()
    {
        return $this->role === 'donor';
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
