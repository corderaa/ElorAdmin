<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Study extends Model
{
    public function subject(): HasMany {
        return $this->hasMany(Subject::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->using(user_studies::class);
    }
}
