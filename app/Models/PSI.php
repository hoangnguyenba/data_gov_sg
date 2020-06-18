<?php

namespace App\Models;

use App\Models\Base;

class PSI extends Base
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'psis';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'region', 'value', 'timestamp', 'update_timestamp'
    ];
}
