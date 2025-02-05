<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @OA\Schema(
 *     schema="Subject",
 *     type="object",
 *     title="Subject Model",
 *     required={"name", "description", "study_id"},
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID of the subject",
 *         example=1
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Name of the subject",
 *         example="Mathematics"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description="Description of the subject",
 *         example="Study of mathematical principles and concepts"
 *     ),
 *     @OA\Property(
 *         property="study_id",
 *         type="integer",
 *         description="ID of the associated study",
 *         example=1
 *     ),
 *     @OA\Property(
 *         property="created_at",
 *         type="string",
 *         format="date-time",
 *         description="Timestamp when the subject was created",
 *         example="2025-01-01T00:00:00Z"
 *     ),
 *     @OA\Property(
 *         property="updated_at",
 *         type="string",
 *         format="date-time",
 *         description="Timestamp when the subject was last updated",
 *         example="2025-01-15T00:00:00Z"
 *     ),
 *     @OA\Property(
 *         property="deleted_at",
 *         type="string",
 *         format="date-time",
 *         description="Timestamp when the subject was deleted (null if not deleted)",
 *         example="null"
 *     )
 * )
 */
class Subject extends Model{
    use SoftDeletes;
    public function studies(): BelongsTo{
        return $this->belongsTo(Study::class);
    }

    public function teachers(): BelongsToMany{
        return $this->belongsToMany(User::class, "subject_user_schedules")->withPivot('day','hour');
    }
}