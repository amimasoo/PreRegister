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

    public function studentCourses()
    {
        return $this->hasMany('App\StudentCourse');
    }

    public function students()
    {
        return $this->belongsToMany('App\User', 'student_course', 'courseID', 'studentID');
    }
}
