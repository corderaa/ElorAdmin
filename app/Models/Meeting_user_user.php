<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;



class Meeting_user_user extends Model
{
    use SoftDeletes;
    public function firstUser(): BelongsTo {
        return $this->belongsTo(User::class, 'first_user_id');
    }

    public function secondUser(): BelongsTo {
        return $this->belongsTo(User::class, 'second_user_id');
    }
    public function status(): BelongsTo {
        return $this->belongsTo(MeetingStatus::class, 'meeting_status_id');
    }

}
