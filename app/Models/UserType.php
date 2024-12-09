<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserType extends Model
{
    public function users(): HasOne {
        return $this->hasOne(User::class);
    }
}
