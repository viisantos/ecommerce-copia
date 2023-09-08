<?php

namespace App\Models;

use App\Models\Sector;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Market extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function sectors(): HasMany
    {
        return $this->hasMany(Sector::class);
    }
}
