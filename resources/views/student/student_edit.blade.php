@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-secondary">
                    <div class="card-header bg-primary text-white" style="float: right;text-align: right">{{ __('ویرایش دانشجو') }}

                    </div>
                    <div class="card-body" style="float: right; text-align: right">
                        @if(Session::has('message'))
                            <p class="text-right alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        <form method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="{{$user->firstName}}" style="text-align: right" id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName"  required autofocus>

                                    @if ($errors->has('firstName'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="firstName" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('نام') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="{{ $user->lastName }}" style="text-align: right" id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" required autofocus>

                                    @if ($errors->has('lastName'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="lastName" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('نام خانوادگی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="{{ $user->studentID }}" style="text-align: right" id="studentID" type="number" class="form-control{{ $errors->has('studentID') ? ' is-invalid' : '' }}" name="studentID" required autofocus>

                                    @if ($errors->has('studentID'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('studentID') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="studentID" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('شماره دانشجویی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="{{ $user->entryYear}}" style="text-align: right" id="entryYear" type="number" class="form-control{{ $errors->has('entryYear') ? ' is-invalid' : '' }}" name="entryYear" required autofocus>

                                    @if ($errors->has('entryYear'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('entryYear') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="entryYear" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('سال ورود') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="{{$user->deptID}}" style="text-align: right" id="deptID" type="number" class="form-control{{ $errors->has('deptID') ? ' is-invalid' : '' }}" name="deptID" required autofocus>

                                    @if ($errors->has('deptID'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('deptID') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="deptID" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('شماره گروه') }}</label>
                            </div>
                            <div class="form-group row mb-0">
                                <div  class="col-md-8">
                                    <button type="submit" class="btn btn-block bg-primary">
                                        {{ __('ثبت تغییرات') }}
                                    </button>
                                </div>
                                <a class="btn btn-block col-md-3" href="/student/list" style="background-color: #4285f4; padding: 10px; margin-left: 30px">لیست دانشجویان</a>
                            </div>
                        </form>
                        @if($errors->any())
                            {{ implode('', $errors->all('<div>:message</div>')) }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
