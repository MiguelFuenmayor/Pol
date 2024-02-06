<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Functionary extends Model
{
    use HasFactory;
    protected function names(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    protected function surnames(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }
    public function gender():BelongsTo
    {
        return $this->BelongsTo(Gender::class);
    }
    public function promo(): BelongsTo
    {
        return $this->BelongsTo(Promo::class);
    }

    public function rank(): BelongsTo
    {
        return $this->BelongsTo(Rank::class);
    }

    public function weapon():HasOne
    {
        return $this->hasOne(Weapon::class);
    }
    public function status(): BelongsTo
    {
        return $this->BelongsTo(Status::class);
    }

    public function dependency(): BelongsTo
    {
        return $this->BelongsTo(Dependency::class);
    }

    public function size(): HasOne
    {
        return $this->hasOne(Size::class);
    }

    public function charges(): BelongsToMany
    {
        return $this->belongsToMany(Charge::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function characteristic(): HasOne
    {
        return $this->hasOne(Characteristic::class);
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function scopeSearch ($query, $value) 
    {

        
        $query->where('names', 'like',
        "%{$value}")->orWhere('surnames', 'like', "%{$value}%");


    }
}
