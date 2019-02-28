@extends('layouts.app')

@section('content')

    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <div class="container">
        @php $students = \App\User::paginate(10);

        @endphp
        <input id="myInput" class="container form-control" type="text" placeholder="جستجو کنید ..." style="direction: rtl">
        <br>

        <table  class="table table-striped table-responsive-xl table-bordered text-center" style="box-shadow: 5px 10px 35px #3e3e3e; text-align: right; direction: rtl">
            <thead class="table-dark ">
            <tr>
                <th scope="row">رديف</th>
                <th>نام</th>
                <th>نام خانوادگي</th>
                <th>شماره دانشجويي</th>
                {{--<th>شماره گروه</th>--}}
                {{--<th>سال ورود</th>--}}
                <th>تعداد واحد هاي اخذ شده</th>
                {{--<th>مجاز</th>--}}
                <th>مشاهده</th>
                <th>ویرایش</th>
                <th>حذف</th>
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
                    <td>{{$student->takenUnitsNumber}}</td>
                    {{--<td>{{$row->confirmed}}</td>--}}
                    <td>
                        <span style="font-size: 23px; color: black;">
                            <a href="" style="color: black ;">
                                <i class="far fa-address-card"></i>
                            </a>
                        </span>
                    </td>
                    <td>
                        {{--<button type="button" class="btn btn-outline-primary">مشاهده اطلاعات</button>--}}
                        {{--<button type="button" class="btn btn-outline-success">ويرايش</button>--}}
                        <span style="font-size: 23px; color: black;">
                              <a href="edit/{{$student->id}}" style="color: black ;">
                                  <i class="far fa-edit"></i>
                              </a>
                        </span>
                        {{--<button type="button" class="btn btn-outline-danger">حذف</button>--}}
                    </td>
                    <td>
                        <span style="font-size: 23px; color: black;">
                            <a href="" style="color: black ;">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </span>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>

            <div class="pagination justify-content-center">{{ $students->links() }}</div>

    </div>

    {{--<a href="mailto:amirreza1751@gmail.com?subject=Hello%20Again" target="_top">send Email</a>--}}

            {{--<div class="container">--}}
                {{--@foreach ($users as $user)--}}

                    {{--<table class="table">--}}
                        {{--<thead></thead>--}}
                        {{--<tbody>--}}
                        {{--<tr>--}}
                            {{--<td>{{ $user->firstname }}</td>--}}
                            {{--<td>{{ $user->lastname }}</td>--}}
                            {{--<td>{{ $user->student_id }}</td>--}}
                            {{--<td>{{ $user->student_id }}</td>--}}
                            {{--<td>{{ $user->dept_id }}</td>--}}
                        {{--</tr>--}}
                        {{--</tbody>--}}
                    {{--</table>--}}
                {{--@endforeach--}}
            {{--</div>--}}

            {{--<div style="margin-left: 40%"> {{ $users->links() }}</div>--}}

@endsection