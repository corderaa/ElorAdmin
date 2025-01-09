<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;



class Meeting_user_user extends Model
{
    use SoftDeletes;
    public function firstUser(): HasMany {
        return $this->hasMany(User::class, 'id');
    }

    public function secondUser(): HasMany {
        return $this->hasMany(User::class);
    }
    public function status(): HasOne{
        return $this->hasOne(MeetingStatus::class);
    }
}
