<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UmrahPackage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function hotels() : HasMany
    {
        return $this->hasMany(Hotel::class);
    }
}
