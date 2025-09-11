<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'trou_id',
        'name',
        'time_to_ship',
    ];

    public function trou()
    {
        return $this->belongsTo(Trou::class);
    }
}
