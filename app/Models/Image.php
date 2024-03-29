<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function imageable() {
        return $this->morphTo();
    }

    public function functionary(): BelongsTo
    {
        return $this->belongsTo(Functionary::class);
    }
}
