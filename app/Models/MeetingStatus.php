<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeetingStatus extends Model
{
    public function meeting(): BelongsTo
    {
        return $this->belongsTo(Meeting_user_user::class);
    }
}
