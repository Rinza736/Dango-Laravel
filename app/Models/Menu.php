<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'weight',
        'nutritional_value',
        'composition'
    ];

    protected $casts = [
        'nutritional_value' => 'array'
    ];
}