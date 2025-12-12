<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'short_title',
        'slug',
        'price',
        'time',
        'sections',
        'template',
        'img',
        'order',
        'description',

    ];

    public $casts = [
        'description' => 'array',
    ];
}
