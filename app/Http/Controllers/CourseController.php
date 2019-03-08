<?php

namespace App\Http\Controllers;

use App\Course;
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
        return Course::create([
            'courseName' => $request['courseName'],
            'courseCode' => $request['courseCode'],
            'courseUnit' => $request['courseUnit'],
            'courseType' => $request['courseType'],
            'deptID' => $request['deptID'],
            'courseOccupied'=>$request['courseOccupied'],
        ]);
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
        $course->delete();

        return back();
    }

    public function course_formView(){
        return view('course.course_add');
    }

    public function course_listView(){
     //   $course=Course::all();
//        return $course;
        return view('course.course_list');
    }

//    public function pagination(){
//
//        $courses = DB::table('course')->paginate(5);
//        return view('course_list',['course' => $courses]);
//    }
}

