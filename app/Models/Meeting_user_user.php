<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @OA\Schema(
 *     schema="Meeting Model",
 *     type="object",
 *     required={"user_id", "meeting_date", "status"},
 *     @OA\Property(
 *         property="user_id",
 *         type="integer",
 *         description="ID del usuario relacionado con la reunión"
 *     ),
 *     @OA\Property(
 *         property="meeting_date",
 *         type="string",
 *         format="date-time",
 *         description="Fecha y hora de la reunión"
 *     ),
 *     @OA\Property(
 *         property="status",
 *         type="string",
 *         enum={"pending", "completed"},
 *         description="Estado de la reunión"
 *     )
 * )
 */
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
