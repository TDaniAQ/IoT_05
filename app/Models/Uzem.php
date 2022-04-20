<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uzem extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nev',
        'desc',
    ];
}
