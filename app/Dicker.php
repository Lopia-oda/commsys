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
}
