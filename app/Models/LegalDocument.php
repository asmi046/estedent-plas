<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalDocument extends Model
{
    protected $table = 'legal_documents';

    protected $fillable = [
        'name',
        'order',
        'file',
        'link',
    ];

    protected $casts = [
        'order' => 'integer',
    ];
}
