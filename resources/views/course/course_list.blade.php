@extends('layouts.app')

@section('content')

        <div class="container">
            {{--@php --}}
                {{--$course = \Illuminate\Support\Facades\DB::table('course')->simplePaginate(10);--}}

            {{--@endphp--}}
            @php $courses = App\Course::paginate(10);
                    @endphp
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
                    <th>مشاهده</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody id="myTable">

                @foreach($courses as $course)
                    <tr>
                        <td>{{++$loop->index}}</td>
                        <td>{{$course->courseName}}</td>
                        <td>{{$course->courseCode}}</td>
                        <td>{{$course->courseUnit}}</td>
                        <td>{{$course->deptID}}</td>
                        <td>{{$course->courseType}}</td>
                        <td>{{$course->courseOccupied}}</td>
                        <td>
                            {{--<button type="button" class="btn btn-outline-primary">مشاهده اطلاعات</button>--}}
                            {{--<button type="button" class="btn btn-outline-success">ویرایش</button>--}}
                            {{--<button type="button" onclick="location.href='delete/{{ $row }}';" class="btn btn-outline-danger">حذف</button>--}}
                            {{--<a href="delete/{{ $row }}">Delete</a>--}}
                            <span style="font-size: 23px; color: black;">
                              <a href="" style="color: black ;">
                                <i class="far fa-address-card"></i>
                              </a>
                             </span>
                        </td>
                        <td>
                            <span style="font-size: 23px; color: black;">
                               <a href="edit/{{$course->id}}" style="color: black ;">
                                  <i class="far fa-edit"></i>
                               </a>
                             </span>
                        </td>
                        <td>
                            <span style="font-size: 23px; color: black;">
                                <a href="delete/{{$course->id}}" id="deleteID" data-target="#myModal" data-toggle="modal" style="color: black ;">
                                <i class="far fa-trash-alt"></i>
                              </a>
                             </span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    <div class="pagination justify-content-center">{{ $courses->links() }}</div>

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title" style="float: right">حذف درس</h5>
                        <button type="button" class="close" data-dismiss="modal" style="float: left;">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" style="text-align: right">
                        آیا از حذف کردن درس مطمئن هستید؟
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        {{--<button href="delete/{{$course->id}}" type="button" class="btn btn-success btn-link" data-dismiss="modal">بله</button>--}}
                        <a href="delete/{{$course->id}}" class="btn btn-success text-white">بله</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">خیر</button>
                    </div>

                </div>
            </div>
        </div>

    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        
        function sendID() {

        }
    </script>

@endsection
{{--@foreach($course as $row)--}}
    {{--<tr>--}}
        {{--<td>{{$row['course_name']}}</td>--}}
        {{--<td>{{$row['course_code']}}</td>--}}
        {{--<td>{{$row['course_unit']}}</td>--}}
        {{--<td>{{$row['course_type']}}</td>--}}
        {{--<td>{{$row['dept_id']}}</td>--}}
    {{--</tr>--}}
{{--@endforeach--}}
