@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table table-striped table-bordered text-center  " style="box-shadow: 5px 10px 35px #3e3e3e; text-align: right; direction: rtl">
        <thead class="table-dark ">
        <tr>
            <th scope="row">رديف</th>
            <th>نام</th>
            <th>نام خانوادگي</th>
            <th>شماره دانشجويي</th>
            {{--<th>شماره گروه</th>--}}
            {{--<th>سال ورود</th>--}}
            {{--<th>تعداد درس هاي اخذ شده</th>--}}
            {{--<th>مجاز</th>--}}
            {{--<th>مشاهده</th>--}}
            {{--<th>ویرایش</th>--}}
            {{--<th>حذف</th>--}}
        </tr>
        </thead>
        <tbody id="myTable">
        {{--@php $student = \App\Student::all();--}}
        {{--@endphp--}}
        @foreach($students as $student)
            <tr>
                <td>{{++$loop->index}}</td>
                <td>{{$student->firstName}}</td>
                <td>{{$student->lastName}}</td>
                <td>{{$student->studentID}}</td>
                {{--<td>{{$row->dept_id}}</td>--}}
                {{--<td>{{$row->entry_year}}</td>--}}
                {{--@php--}}
                    {{--$occupied = App\StudentCourse::where('studentID', $student->id)->where('term', Session::get('term'))->where('year', Session::get('year'))->get()->count();--}}
                {{--@endphp--}}
                {{--<td>{{$occupied}}</td>--}}

            </tr>

        @endforeach

        </tbody>
    </table>

        <div class="row" style="font-size: 30px; float: right; margin-right: -5px;">
            <a class="btn row"  href="/course/list" style="background-color: #3f5c80;">
                بازگشت به لیست درس ها
            </a>
        </div>

</div>
    @endsection
