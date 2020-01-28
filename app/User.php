<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name',
        'role',
        'email',
        'password',
        'image',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const USER_NOT_ACTIVE = 0;
    const USER_ACTIVE = 1;
    const USER_ROLE_ADMIN = 1;
    const USER_ROLE_ACCOUNTANT = 2;

    const MEDIA_PATH = 'media\users\\';

    public static function numberOfUsers()
    {
        $number = DB::table('users')->get()->count();
        return $number;
    }

    public static function userBills($id)
    {
        $number = DB::table('bills')->where('user_id', $id)->get()->count();
        return $number;
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function bills()
    {
        return $this->hasMany(Bill::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

}
