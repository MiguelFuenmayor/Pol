<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Status extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function functionary():BelongsTo
    {
        return $this->belongsTo(Functionary::class);
    }
}
