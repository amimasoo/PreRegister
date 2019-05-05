@extends('layouts.app')
@section('content')

    <div class="container">
        <input id="myInput" class="form-control container" type="text" placeholder=" جستجو کنید ..." style="direction: rtl">
        <br>

        <table class="table table-striped table-responsive-xl table-bordered text-center" style="box-shadow: 5px 10px 35px #3e3e3e; text-align: right; direction: rtl">
            <thead class="table-dark">
            <tr>
                <th scope="row">ردیف</th>
                <th >نام درس</th>
                <th>کد درس</th>
                <th>واحد درس</th>
                <th>گروه درس</th>
                <th>نوع درس</th>
                <th>تعداد اخذ</th>
            </tr>
            </thead>
            <tbody id="myTable">

            @foreach($courses as $course)
                <tr>
                    <td>{{++$loop->index}}</td>
                    <td>{{$course->course->courseName}}</td>
                    <td>{{$course->course->courseCode}}</td>
                    <td>{{$course->course->courseUnit}}</td>
                    <td>{{$course->course->deptID}}</td>
                    <td>{{$course->course->courseType}}</td>
                    @php
                        $occupied = App\StudentCourse::where('courseID', $course->course->id)->where('term', Session::get('term'))->where('year', Session::get('year'))->get()->count();
                    @endphp
                    <td>{{$occupied}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <span  style="font-size: 30px; float: right; padding-right: 80px;">
            <a class="btn "  href="/student/list" style="background-color: #3f5c80;">
                بازگشت به لیست دانشجویان
            </a>
        </span>

    @endsection
