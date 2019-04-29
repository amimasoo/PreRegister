<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionDepartment extends Model
{
    protected $table = 'option_department';

    protected $fillable = [
        'optionID','deptID','option_value'
    ];
}
