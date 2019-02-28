<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';

    protected $fillable = [
        'id','courseName','courseCode','courseOccupied','courseUnit','courseType','deptID'
    ];
}
