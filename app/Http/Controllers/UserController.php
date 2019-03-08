<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return User::create([
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'studentID' => $request['student_ID'],
            'entryYear' => $request['entryYear'],
            'deptID' => $request['deptID'],
            'takenUnitsNumber' => $request['takenUnitsNumber'],
            'allowedUnit' => $request['allowedUnit'],
            'confirmed' => $request['confirmed'],
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('student.student_edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'studentID'=>'required|unique:users,studentID,'.$user->id
        ]);
        $user->update($request->all());
        Session::flash('message', '.اطلاعات دانشجو با موفقیت ویرایش شد');
        Session::flash('alert-class', 'alert-success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        Session::flash('message', '.دانشجو '.$user->firstName.' '.$user->lastName.' با موفقیت حذف شد');
        Session::flash('alert-class', 'alert-success');
        $user->delete();

        return back();
    }

    public function student_listView(){
        return view('student.student_list');
    }

    public function pagination(){
        $users = DB::table('users')->paginate(10);

        return view('student.student_list',['users' => $users]);
    }

}
