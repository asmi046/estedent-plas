<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControlOrganization extends Model
{
    public $table = 'control_organizations';

    public $fillable = [
        'name',
        'address',
        'phones',
        'email',
        'sort_order',
    ];

}
