<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrouImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_path',
        'name',
        'trou_id',
    ];

    // Relation inverse avec Trou
    public function trou()
    {
        return $this->belongsTo(Trou::class);
    }
}
