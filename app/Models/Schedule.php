<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class schedule extends Model
{
    public function schedule() : BelongsTo{
        return $this->belongsTo(Subject_user_schedule::class);
    }
}
