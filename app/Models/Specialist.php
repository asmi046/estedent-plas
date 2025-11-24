<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Specialist extends Model
{
    use HasFactory;

    protected $fillable = [
        'fio',
        'photo',
        'slug',
        'position',
        'description',
        'sort_order',
        'certificates'
    ];

    protected $casts = [
        'certificates' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($specialist) {
            if (empty($specialist->slug)) {
                $specialist->slug = Str::slug($specialist->fio);
            }
        });

        static::updating(function ($specialist) {
            if ($specialist->isDirty('fio') && empty($specialist->slug)) {
                $specialist->slug = Str::slug($specialist->fio);
            }
        });
    }
}
