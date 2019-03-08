@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-secondary">
                <div class="card-header bg-primary text-white" style="float: right; text-align: right">اضافه کردن درس جدید</div>
                <div class="card-body" style="float: right; text-align: right">
                    @if(Session::has('message'))
                        <p class="text-right alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    <form method="post" action="">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-8">
                                <input name="courseName" id="courseName" class="form-control{{ $errors->has('courseName') ? ' is-invalid' : '' }}" type="text" style="text-align: right" title="نام درس">
                                @if ($errors->has('courseName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('courseName') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <lable for="courseName" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">نام درس</lable>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-8">
                                <input name="courseCode" id="courseCode" class="form-control{{ $errors->has('courseCode') ? ' is-invalid' : '' }}" type="number" style="text-align: right" title="کد درس">
                                @if ($errors->has('courseCode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('courseCode') }}</strong>
                                    </span>
                                @endif
                              </div>
                            <lable for="courseCode" class="col-md-4 col-form-label" style="float: right;text-align: right">کد درس</lable>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8">
                                <input name="courseUnit" id="courseUnit" class="form-control{{ $errors->has('courseUnit') ? ' is-invalid' : '' }}" type="number" style="text-align: right" title="واحد درس">
                                @if ($errors->has('courseUnit'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('courseUnit') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <lable for="courseUnit" class="col-md-4 col-form-label" style="float: right;text-align: right">واحد درس</lable>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8">
                                <input name="deptID" id="deptID" class="form-control{{ $errors->has('deptID') ? ' is-invalid' : '' }}" type="number" style="text-align: right" title="شماره گروه">
                                @if ($errors->has('deptID'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('deptID') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <lable for="deptID" class="col-md-4 col-form-label" style="float: right;text-align: right">شماره گروه درس</lable>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8">
                                <select name="courseType" id="courseType" class="form-control{{ $errors->has('courseType') ? ' is-invalid' : '' }}"  style="text-align: right;direction: rtl" title="عملی/نظری">
                                    <option value="نظری">نظری</option>
                                    <option value="عملی">عملی</option>
                                </select>
                                @if ($errors->has('courseType'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('courseType') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <lable for="courseType" class="col-md-4 col-form-label" style="float: right;text-align: right">نوع درس</lable>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('ثبت درس') }}
                                </button>
                            </div>
                        </div>

                        @if($errors->any())
                            {{ implode('', $errors->all('<div>:message</div>')) }}
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
