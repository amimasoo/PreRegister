<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';

    protected $fillable = [
        'id','courseName','courseCode','courseOccupied','courseUnit','courseType','deptID'
    ];

    public function course_term_years()
    {
        return $this->hasMany('App\CourseTermYear');
    }
}
