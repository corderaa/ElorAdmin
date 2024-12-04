<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_studies extends Model
{
    public function studies(): HasMany {
        return $this->hasMany(Studies::class);
    }
    public function users(): HasMany {
        return $this->hasMany(User::class);
    }
}
