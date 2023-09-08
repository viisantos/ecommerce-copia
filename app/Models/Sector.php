<?php

namespace App\Models;


use App\Models\Market;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sector extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function market(): BelongsTo
    {
        return $this->belongsTo(Market::class);
    }

    public function products(): HasMany
    {
       return $this->hasMany(Product::class);
    }
}
