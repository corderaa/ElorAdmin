<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @OA\Schema(
 *     schema="Study",
 *     type="object",
 *     title="Study Model",
 *     required={"name", "description"},
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID of the study",
 *         example=1
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Name of the study",
 *         example="Computer Science"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description="Description of the study",
 *         example="Study of computer science and related technologies"
 *     ),
 *     @OA\Property(
 *         property="created_at",
 *         type="string",
 *         format="date-time",
 *         description="Timestamp when the study was created",
 *         example="2025-01-01T00:00:00Z"
 *     ),
 *     @OA\Property(
 *         property="updated_at",
 *         type="string",
 *         format="date-time",
 *         description="Timestamp when the study was last updated",
 *         example="2025-01-15T00:00:00Z"
 *     ),
 *     @OA\Property(
 *         property="deleted_at",
 *         type="string",
 *         format="date-time",
 *         description="Timestamp when the study was deleted (null if not deleted)",
 *         example="null"
 *     )
 * )
 */
class Study extends Model
{
    use SoftDeletes;
    public function subject(): HasMany {
        return $this->hasMany(Subject::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
