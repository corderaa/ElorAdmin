<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_user extends Model
{
    use SoftDeletes;
    public function firstUser(): HasMany {
        return $this->hasMany(User::class);
    }

    public function secondUser(): HasMany {
        return $this->hasMany(User::class);
    }
}
