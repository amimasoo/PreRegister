<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = 'option';

    protected $fillable = [
        'option_id','option_name'
    ];
}
