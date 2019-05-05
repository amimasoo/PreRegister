

@role('admin')
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-right">
                    <div class="card-header">پنل ادمین</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}

                            </div>
                        @endif
                            <div class="form-group row mb-0">
                                <div class="col-sm-8">

                                    <button disabled class="btn" style="direction: rtl; background-color: #3f5c80;">
                                        سال{{Session('year')}}
                                    </button>

                                    <button disabled class="btn" style="direction: rtl; background-color: #3f5c80;">
                                        ترم{{Session('term')}}
                                    </button>
                                </div>
                                <label for="currentTerm_currentYear" class="col-sm-4 col-form-label text-md-right" style="float: right; text-align: right">{{ __('ترم و سال جاری') }}</label>
                            </div>
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
                    <div class="card-header ">پنل دانشجو</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}

                            </div>
                        @endif
                        <br>
                        خوش آمدید
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@endrole
