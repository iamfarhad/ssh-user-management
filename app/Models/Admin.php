<?php

namespace App\Models;

use App\Enums\AdminRole;
use App\Enums\AdminStatus;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['username', 'password', 'role', 'status'];

    protected $casts = [
        'status' => AdminStatus::class,
        'role' => AdminRole::class,
    ];
}
