<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Relation avec les trous
    public function trous()
    {
        return $this->hasMany(Trou::class);
    }
}
