<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    public $table = 'equipments';

    protected $guarded = [];
    
    public function factory(): BelongsTo
    {
       return $this->belongsTo(factory::class,'factoryid','id');
    }
}
