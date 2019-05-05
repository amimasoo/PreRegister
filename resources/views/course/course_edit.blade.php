@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-secondary">
                    <div class="card-header bg-primary text-white" style="float: right; text-align: right">{{ __('ویرایش درس') }}
                        <a class="btn float-left inline-block" href="/course/list" style="background-color: #ffffff; border-color: #006680; color: black; border: solid 1px; padding: 10px">لیست دروس</a>
                    </div>
                    <div class="card-body" style="float: right; text-align: right;">
                        @if(Session::has('message'))
                            <p class="text-right alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        <form method="post">
                            @csrf
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
                                    <select name="courseType" id="courseType" class="custom-select form-control{{ $errors->has('courseType') ? ' is-invalid' : '' }}"  style="text-align: right;direction: rtl" title="عملی/نظری">
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
                                    <button type="submit" class="btn btn-block bg-primary">
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
