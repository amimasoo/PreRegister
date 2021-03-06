@extends('layouts.app')

@section('content')

        <div class="container">
            <input id="myInput" class="form-control container" type="text" placeholder=" جستجو کنید ..." style="direction: rtl">
            <br>
            @if(Session::has('message'))
                <p class="text-right alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
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
                        <td>{{$course->course->courseName}}</td>
                        <td>{{$course->course->courseCode}}</td>
                        <td>{{$course->course->courseUnit}}</td>
                        <td>{{$course->course->deptID}}</td>
                        <td>{{$course->course->courseType}}</td>
                        @php
                            $occupied = App\StudentCourse::where('courseID', $course->course->id)->where('term', Session::get('term'))->where('year', Session::get('year'))->get()->count();
                        @endphp
                        <td>{{$occupied}}</td>
                        <td>
                            <span style="font-size: 23px; color: black;">
                              <a href="students/{{$course->course->id}}" style="color: black ;">
                                <i class="far fa-address-card"></i>
                              </a>
                             </span>
                        </td>
                        <td>
                            <span style="font-size: 23px; color: black;">
                               <a href="edit/{{$course->course->id}}" style="color: black ;">
                                  <i class="far fa-edit"></i>
                               </a>
                             </span>
                        </td>
                        <td>
                            <span style="font-size: 23px; color: black;">
                                <a class="deleteCourse" href="#" data-courseid="{{$course->course->id}}" id="deleteID" data-target="#myModal" data-toggle="modal" style="color: black ;">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                             </span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row" style="font-size: 30px; float: right; padding-right: 10px;">
                <a class="btn col" href="/course/add" style="background-color: #3f5c80;">
                    افزودن درس جدید
                </a>
            </div>
        </div>

        <br><br><br>
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
                        <a href="" id="modalDeleteButton" class="btn waves-effect btn-block btn-success text-white">بله</a><br>
                        <button type="button" class="btn btn-block btn-danger waves-effect" data-dismiss="modal">خیر</button>
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

        $(document).on('click','.deleteCourse',function(){
            var courseID=$(this).attr('data-courseid');
            var courseIDhref = "delete/"+ courseID;
            $('#modalDeleteButton').attr("href", courseIDhref);
        });
    </script>

@endsection

