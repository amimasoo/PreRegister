

@role('admin')
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-right">
                    <div class="card-header">ادمین</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}

                            </div>
                        @endif
                        {{Session('term')}} ترم
                        {{--{{$test}}--}}

                        <br>
                        {{Session('year')}} سال
                        <br>
                            ادمین خوش آمدید
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@endrole



@role('student')
{{--@extends('student.studentHomePage')--}}
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-right">
                    <div class="card-header">دانشجو</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}

                            </div>
                        @endif
                        {{--{{$_SESSION['term']}}--}}
                        {{--{{$test}}--}}
                        student
                        <br>
                        {{--{{$_SESSION['year']}}--}}
                        <br>
                        خوش آمدید
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@endrole
