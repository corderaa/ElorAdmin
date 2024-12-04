<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comentario extends Model{
    public function studies(): BelongsTo{
        return $this->belongsTo(Study::class);
    }
