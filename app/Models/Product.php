<?php

namespace App\Models;

use App\Models\Sector;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function sector(): BelongsTo
    {
        return $this->belongsTo(Sector::class);
    }
}
