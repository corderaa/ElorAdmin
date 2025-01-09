<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MeetingStatus extends Model
{
    use SoftDeletes;
    public function meeting(): BelongsTo
    {
        return $this->belongsTo(Meeting_user_user::class);
    }
}
