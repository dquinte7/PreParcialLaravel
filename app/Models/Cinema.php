<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;
    protected $table = 'cinema';
    protected $fillable = [
        'title',
        'director',
        'genre',
        'date',
        'rating',
        'duration',
        'synopsis',
        'studio'
    ];
}
