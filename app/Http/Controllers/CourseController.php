<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseTermYear;
use App\StudentCourse;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'courseCode' => 'required|unique:course',
        ]);


        $course = Course::create([
            'courseName' => $request['courseName'],
            'courseCode' => $request['courseCode'],
            'courseUnit' => $request['courseUnit'],
            'courseType' => $request['courseType'],
            'deptID' => $request['deptID'],
            'courseOccupied'=>$request['courseOccupied'],
        ]);

        $course_term_year = CourseTermYear::where('courseID',$course->id)->where('term', Session::get('term'))->where('year', Session::get('year'))->first();

        if ($course_term_year == null){
            CourseTermYear::create([
                'courseID' => $course->id,
                'term' => Session::get('term'),
                'year' => Session::get('year')
            ]);
        }


        Session::flash('message', '.درس '.$request['courseName'].' با موفقیت اضافه شد');
        Session::flash('alert-class', 'alert-success');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('course.course_edit',['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'courseCode' => 'required|unique:course,courseCode,'.$course->id
        ]);
        $course->update($request->all());
        Session::flash('message', '.درس با موفقیت ویرایش شد');
        Session::flash('alert-class', 'alert-success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        Session::flash('message', '.درس '.$course->courseName.' با موفقیت حذف شد');
        Session::flash('alert-class', 'alert-success');
//        $course->delete();
        CourseTermYear::where('courseID', $course->id)->where('term', Session::get('term'))->where('year', Session::get('year'))->delete();

        return back();
    }

    public function course_formView(){
        return view('course.course_add');
    }

    public function course_listView(){

        $courses = CourseTermYear::with('course')->where('term', Session::get('term'))->where('year', Session::get('year'))->paginate(10);
        return view('course.course_list',compact('courses'));
    }

    public function related_students($course_id)
    {
//        $students = Course::with('students')->where('id', $course_id)->wherePivot('term', Session::get('term'))->get();
//        $students = $course->students()->wherePivot('term', Session::get('term'))->get();
//            $result = Course::whereHas('students', function ($q) {
//                $q->where('term', Session::get('term'))->where('year', Session::get('year'));
//            })->where('id', $course_id)->get();
        $students = DB::select(DB::raw("SELECT
             users.firstName, users.lastName , users.studentID , users.entryYear
             FROM `student_course` JOIN users ON student_course.studentID=users.id 
            WHERE term='".Session::get('term')."' AND year='".Session::get('year')."' AND student_course.courseID=$course_id"));

        return view('course.students_by_course',compact('students'));
//        return $students;
    }
}

