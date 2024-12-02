<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Subject_user_schedule extends Model{
    
    public function user(): HasMany {
        return $this->hasMany(User::class);
    }
    public function subject(): HasMany {
        return $this->hasMany(Subject::class);
    }

}
