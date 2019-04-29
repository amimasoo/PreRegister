<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseTermYear;
use App\StudentCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StudentCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function show(StudentCourse $studentCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentCourse $studentCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentCourse $studentCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentCourse $studentCourse)
    {

    }

    public function availableCourseView(){

        $courses = CourseTermYear::with('course')->where('term', Session::get('term'))->where('year', Session::get('year'))->paginate(10);
//        return $courses;
        return view('availableCourses.availableCourses',compact('courses'));
    }

    public function insertSelectedCourse(Request $request){

        $request = $request->all();
//       return $request['courseTaken'];

        $student = Auth::user();
        StudentCourse::where('studentID', $student['id'])->where('term',Session::get('term'))->where('year',Session::get('year'))->delete();
        foreach($request['courseTaken'] as $req) {

            StudentCourse::create([
                'courseID' => $req,
                'studentID' => $student['id'],
                'term' => Session::get('term'),
                'year' => Session::get('year')
            ]);
        }
        Session::flash('message', '.دروس مورد نظر با موفقیت اخذ شدند');
        Session::flash('alert-class', 'alert-success');

        return back();
    }
}
