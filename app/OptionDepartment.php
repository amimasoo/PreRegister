<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionDepartment extends Model
{
    protected $table = 'option_department';

    protected $fillable = [
        'option_id','dept_id','option_value'
    ];
}
