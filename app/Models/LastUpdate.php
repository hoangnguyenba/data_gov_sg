<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LastUpdate extends Model
{

    const AirTempType = 'at';
    const PSIType = 'psi';

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'type', 'time', 'key'
   ];
}
