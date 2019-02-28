<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TermYear extends Model
{
    protected $table = 'term_year';

    protected $fillable = [
        'id','term','year'
    ];
}
