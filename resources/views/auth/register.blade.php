@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-secondary">
                <div class="card-header bg-primary text-white" style="float: right;text-align: right">{{ __('ثبت نام') }}</div>

                <div class="card-body" style="float: right;text-align: right">
                    <form method="post" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-8">
                                <input style="text-align: right" id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

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
                                <input style="text-align: right" id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required autofocus>

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
                                <input style="text-align: right" id="studentID" type="number" class="form-control{{ $errors->has('studentID') ? ' is-invalid' : '' }}" name="studentID" value="{{ old('studentID') }}" required autofocus>

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
                                <input style="text-align: right" id="entryYear" type="number" class="form-control{{ $errors->has('entryYear') ? ' is-invalid' : '' }}" name="entryYear" value="{{ old('entryYear') }}" required autofocus>

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
                                <input style="text-align: right" id="deptID" type="number" class="form-control{{ $errors->has('deptID') ? ' is-invalid' : '' }}" name="deptID" value="{{ old('deptID') }}" required autofocus>

                                @if ($errors->has('deptID'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('deptID') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="deptID" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('شماره گروه') }}</label>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8">
                                <input style="text-align: right" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('آدرس ایمیل') }}</label>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8">
                                <input style="text-align: right" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('رمز عبور') }}</label>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8">
                                <input style="text-align: right" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('تکرار رمز عبور') }}</label>
                        </div>
                            <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-block bg-primary">
                                    {{ __('ثبت نام') }}
                                </button>
                            </div>
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
