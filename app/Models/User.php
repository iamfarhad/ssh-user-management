<?php

namespace App\Models;

use App\Enums\UserStatus;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['username', 'password', 'email', 'tg_id', 'phone', 'status', 'traffic_limit', 'user_limit', 'start_at_first_connect', 'limit_day'];

    protected $casts = [
        'status' => UserStatus::class,
    ];
}
