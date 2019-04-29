<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseTermYear extends Model
{
    protected $table = 'course_term_year';

    protected $fillable = [
        'courseID','term','year'
    ];

    public function course()
    {
        return $this->belongsTo('App\course', 'courseID');
    }
}
