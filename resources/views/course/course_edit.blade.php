@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-secondary">
                    <div class="card-header bg-primary text-white" style="float: right; text-align: right">{{ __('ویرایش درس') }}</div>
                    <div class="card-body" style="float: right; text-align: right;">
                        @if(Session::has('message'))
                            <p class="text-right alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        <form method="post">
                            @csrf
                            {{--<div class="form-group row">
                                <div class="col-md-8">
                                    <input value="{{$course->courseName}}" name="courseName" id="courseName" class="form-control{{ $errors->has('courseName') ? ' is-invalid' : '' }} col-md-8" type="text" style="text-align: right; display: block;" title="نام درس">
                                    @if ($errors->has('courseName'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('courseName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <lable for="courseName" class="col-form-label text-md-right" style="float: right;text-align: right">نام درس</lable>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input value="{{$course->courseCode}}" name="courseCode" id="courseCode" class="form-control{{ $errors->has('courseCode') ? ' is-invalid' : '' }} col-md-8" type="number" style="text-align: right" title="کد درس">
                                    @if ($errors->has('courseCode'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('courseCode') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <lable for="courseCode" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">کد درس</lable>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input value="{{$course->courseUnit}}" name="courseUnit" id="courseUnit" class="form-control{{ $errors->has('courseUnit') ? ' is-invalid' : '' }} col-md-8" type="number" style="text-align: right" title="واحد درس">
                                    @if ($errors->has('courseUnit'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('courseUnit') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <lable for="courseUnit" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">واحد درس</lable>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input value="{{$course->deptID}}" name="deptID" id="deptID" class="form-control{{ $errors->has('deptID') ? ' is-invalid' : '' }} col-md-8" type="number" style="text-align: right" title="شماره گروه">
                                    @if ($errors->has('deptID'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('deptID') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <lable for="deptID" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">شماره گروه درس</lable>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-11">
                                    <select name="courseType" id="courseType" class="form-control{{ $errors->has('courseType') ? ' is-invalid' : '' }} col-md-8"  style="text-align: right;direction: rtl" title="عملی/نظری">
                                        <option value="نظری" @if($course->courseType =='نظری'){{'selected'}}@endif>نظری</option>
                                        <option value="عملی" @if($course->courseType =='عملی'){{'selected'}}@endif>عملی</option>
                                    </select>
                                    @if ($errors->has('courseType'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('courseType') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <lable for="courseType" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">نوع درس</lable>
                            </div>
                            <br>--}}

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="{{$course->courseName}}" style="text-align: right" id="courseName" type="text" class="form-control{{ $errors->has('courseName') ? ' is-invalid' : '' }}" name="courseName"  required autofocus>

                                    @if ($errors->has('courseName'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('courseName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="courseName" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('نام') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="{{$course->courseCode}}" style="text-align: right" id="courseCode" type="number" class="form-control{{ $errors->has('courseCode') ? ' is-invalid' : '' }}" name="courseCode"  required autofocus>

                                    @if ($errors->has('courseCode'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('courseCode') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="courseCode" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('کد درس') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="{{$course->courseUnit}}" style="text-align: right" id="courseUnit" type="number" class="form-control{{ $errors->has('courseUnit') ? ' is-invalid' : '' }}" name="courseUnit"  required autofocus>

                                    @if ($errors->has('courseUnit'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('courseUnit') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="courseUnit" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('واحد درس') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="{{$course->deptID}}" style="text-align: right" id="deptID" type="number" class="form-control{{ $errors->has('deptID') ? ' is-invalid' : '' }}" name="deptID"  required autofocus>

                                    @if ($errors->has('deptID'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('deptID') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="deptID" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('شماره گروه درس') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    {{--<input value="{{$course->courseType}}" style="text-align: right" id="courseType" type="text" class="form-control{{ $errors->has('courseType') ? ' is-invalid' : '' }}" name="courseType"  required autofocus>--}}
                                    <select name="courseType" id="courseType" class="form-control{{ $errors->has('courseType') ? ' is-invalid' : '' }}"  style="text-align: right;direction: rtl" title="عملی/نظری">
                                        <option value="نظری" @if($course->courseType =='نظری'){{'selected'}}@endif>نظری</option>
                                        <option value="عملی" @if($course->courseType =='عملی'){{'selected'}}@endif>عملی</option>
                                    </select>
                                    @if ($errors->has('courseType'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('courseType') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="courseType" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('نوع درس') }}</label>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-block btn-primary">
                                        {{ __('ثبت تغییرات') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection