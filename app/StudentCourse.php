<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    protected $table = 'student_course';

    protected $fillable = [
        'studentID','courseID','term','year'
    ];
    public function course()
    {
        return $this->belongsTo('App\course', 'courseID');
    }

}
