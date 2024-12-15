<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subject extends Model{
    public function studies(): BelongsTo{
        return $this->belongsTo(Study::class);
    }

    public function schedules(): BelongsToMany{
        return $this->belongsToMany(Subject_user_schedule::class, "subject_user_schedules", "subject_id", "user_id");
    }
}