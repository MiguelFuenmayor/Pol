<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Functionary extends Model
{
    use HasFactory;
    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }

    public function promo(): HasOne
    {
        return $this->hasOne(Promo::class);
    }

    public function rank(): HasOne
    {
        return $this->hasOne(Rank::class);
    }

    public function weapon():HasOne
    {
        return $this->hasOne(Weapon::class);
    }
    public function status(): HasOne
    {
        return $this->hasOne(Status::class);
    }

    public function dependency(): HasOne
    {
        return $this->hasOne(Dependency::class);
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
}
