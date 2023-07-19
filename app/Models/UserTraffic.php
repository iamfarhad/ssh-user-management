<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTraffic extends Model
{
    protected $fillable = ['user_id', 'download', 'upload', 'total'];
}
