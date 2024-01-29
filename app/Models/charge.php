<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Charge extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function functionaries(): BelongsToMany
    {
        return $this->belongsToMany(Functionary::class);
    }
}
