<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting_user_user extends Model
{
    public function firstUser(): HasMany {
        return $this->hasMany(User::class);
    }

    public function secondUser(): HasMany {
        return $this->hasMany(User::class);
    }
}
