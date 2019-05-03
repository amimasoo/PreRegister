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
        @if(Session::has('message'))
            <p class="text-right alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        <table  class="table table-striped table-responsive-xl table-bordered text-center" style="box-shadow: 5px 10px 35px #3e3e3e; text-align: right; direction: rtl">
            <thead class="table-dark ">
            <tr>
                <th scope="row">رديف</th>
                <th>نام</th>
                <th>نام خانوادگي</th>
                <th>شماره دانشجويي</th>
                {{--<th>شماره گروه</th>--}}
                {{--<th>سال ورود</th>--}}
                <th>تعداد درس هاي اخذ شده</th>
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
                    @php
                        $occupied = App\StudentCourse::where('studentID', $student->id)->where('term', Session::get('term'))->where('year', Session::get('year'))->get()->count();
                    @endphp
                    <td>{{$occupied}}</td>
                    {{--<td>{{$row->confirmed}}</td>--}}
                    <td>
                        <span style="font-size: 23px; color: black;">
                            <a href="taken_courses/{{$student->id}}" style="color: black ;">
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
                            <a class="deleteStudent" data-studentid="{{$student->id}}" href="delete/{{$student->id}}" id="deleteID" data-target="#myModal" data-toggle="modal" style="color: black ;">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </span>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>

            <div class="pagination justify-content-center">{{ $students->links() }}</div>

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title" style="float: right">حذف دانشجو</h5>
                        <button type="button" class="close" data-dismiss="modal" style="float: left;">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" style="text-align: right">
                        آیا از حذف کردن این دانشجو مطمئن هستید؟
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        {{--<button href="delete/{{$course->id}}" type="button" class="btn btn-success btn-link" data-dismiss="modal">بله</button>--}}
                        <a href="" id="modalDeleteButton" class="btn waves-effect btn-block btn-success text-white">بله</a><br>
                        <button type="button" class="btn btn-block btn-danger waves-effect" data-dismiss="modal">خیر</button>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).on('click','.deleteStudent',function(){
            var studentID = $(this).attr('data-studentid');
            var studentIDhref = "delete/"+ studentID;
            $('#modalDeleteButton').attr("href", studentIDhref);
        });
    </script>

@endsection
