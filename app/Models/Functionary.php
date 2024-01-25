<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
}
