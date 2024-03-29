<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Weapon extends Model
{
    
    use HasFactory;
    protected function weaponType(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function functionary(): BelongsTo
    {
        return $this->belongsTo(Functionary::class)->withDefault(['weapon_type'=> 'NO']);
    }
}
