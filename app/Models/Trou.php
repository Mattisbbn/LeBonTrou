<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trou extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'depth',
        'volume',
        'location',
        'diameter',
        'description',
    ];

    // Relation avec les images
    public function images()
    {
        return $this->hasMany(TrouImage::class);
    }
}