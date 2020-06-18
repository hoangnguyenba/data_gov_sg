<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AirTemperature extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'station_id', 'value', 'timestamp'
    ];
}
