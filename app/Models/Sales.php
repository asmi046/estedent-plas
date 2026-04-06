<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'img',
        'description',
        'short_description',
    ];

    public function setSlugAttribute($value)
    {
        if (empty($value)) {
            $this->attributes['slug'] = Str::slug($this->title);

            return;
        }

        $this->attributes['slug'] = $value;
    }
}
