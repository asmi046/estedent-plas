<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_code',
        'service_name',
        'price',
        'unit',
        'section',
        'sort_order'
    ];
}
