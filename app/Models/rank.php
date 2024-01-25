<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rank extends Model
{
    use HasFactory;
    public function functionary(): BelongsTo
    {
        return $this->belongsTo(Functionary::class);
    }
}
