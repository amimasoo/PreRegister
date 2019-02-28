<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseTermYear extends Model
{
    protected $table = 'course_term_year';

    protected $fillable = [
        'course_id','term','year'
    ];
}
