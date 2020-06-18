<?php

namespace App\Models;

use App\Models\Base;

class Region extends Base
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'latitude', 'longitude',
    ];
}
