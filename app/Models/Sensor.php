<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function equipment(): BelongsTo
    {
        return $this->belongsTo(equipment::class,'sensorid','id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }
}
