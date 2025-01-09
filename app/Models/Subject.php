<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model{
    use SoftDeletes;
    public function studies(): BelongsTo{
        return $this->belongsTo(Study::class);
    }

    public function teachers(): BelongsToMany{
        return $this->belongsToMany(User::class, "subject_user_schedules")->withPivot('day','hour');
    }
}