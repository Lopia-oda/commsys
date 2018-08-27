<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dicker extends Model
{
    protected $dates = [
        'dicker_limit_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //protected $casts = [
    //    'dicker_limit_at' => 'timestamp:Y-m-d H:i',
    //];

    //protected $dateFormat = [
    //    'dicker_limit_at' => 'Y-m-d H:i',
    //];
}
