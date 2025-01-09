<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject_user_schedule extends Model{
    use SoftDeletes;
    
    //public function subjects(): HasMany {
    //    return $this->hasMany(Subject::class);
    //}

    //public function users(): HasMany {
    //    return $this->hasMany(User::class, 'user_id');
    //}

}
