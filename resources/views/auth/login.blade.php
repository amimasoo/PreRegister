@extends('student.studentHomePage')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5" style="margin-left: 200px">
            <div class="card" style="box-shadow: 5px 10px 35px #3e3e3e;">
                <div class="card-header bg-primary text-white" style="float: right; text-align: right">{{ __('ورود') }}</div>

                <div class="card-body" style="float: right; text-align: right">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-sm-8">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="email" class="col-sm-4 col-form-label text-md-right" style="float: right; text-align: right">{{ __('ایمیل') }}</label>

                        </div>

                        <div class="form-group row">

                            <div class="col-sm-8">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="password" class="col-sm-4 col-form-label text-md-right" style="float: right; text-align: right">{{ __('رمز عبور') }}</label>
                        </div>

                        <br>
                        {{--<div class="form-group row">--}}
                            {{--<div class="col-sm-4 offset-md-4">--}}
                                {{--<div class="form-check">--}}
                                    {{--<label class="form-check-label" for="remember">--}}
                                        {{--{{ __('مرا بخاطر بسپار') }}--}}
                                    {{--</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
                                    {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-sm-8">--}}
                                {{--@if (Route::has('password.request'))--}}
                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                        {{--{{ __('رمز عبور خود را فراموش کرده اید؟') }}--}}
                                    {{--</a>--}}
                                {{--@endif--}}
                                <button type="submit" class="btn btn-block bg-primary">
                                    {{ __('ورود') }}
                                </button>
                            {{--</div>--}}
                        {{--</div>--}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
