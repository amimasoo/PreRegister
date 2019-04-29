@extends('layouts.app')

@section('content')

    <div class="container">

        <input id="myInput" class="form-control container" type="text" placeholder=" جستجو کنید ..." style="direction: rtl">
        <br>

            @if(Session::has('message'))
                <p class="text-right text-black-50 alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif

        <form action="/availableCourses" method="post">
            @csrf
            <div class="container form-group">
                <div class="col-md-4" style="margin: 0 auto;">
                    <button type="submit" class="btn btn-block btn-outline-primary">
                        {{ __('ثبت نام دروس انتخاب شده') }}
                    </button>
                </div>
            </div>

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
                    <th>اخذ/حذف</th>
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
                        <td>{{$course->course->courseOccupied}}</td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input  type="checkbox" class="custom-control-input" id="defaultUnchecked{{$loop->index}}" value="1" name="courseTaken[]">
                                <label class="custom-control-label" for="defaultUnchecked{{$loop->index}}"></label>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        <div class="container form-group">
            <div class="col-md-4" style="margin: 0 auto;">
                <button type="submit" class="btn btn-block btn-outline-primary">
                    {{ __('ثبت نام دروس انتخاب شده') }}
                </button>
            </div>
        </div>
        </form>
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
    </script>

@endsection
