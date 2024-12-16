<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Model;

class Meeting_user_user extends Model
{
    public function firstUser(): HasMany {
        return $this->hasMany(User::class, 'id');
    }

    public function secondUser(): HasMany {
        return $this->hasMany(User::class);
    }
}
