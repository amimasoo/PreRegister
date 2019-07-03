@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white" style="float: right; text-align: right">{{ __('تغییر ترم و سال') }}</div>

                    <div class="card-body" style="float: right; text-align: right">
                        <form method="POST" action="/admin/setting">
                            @if(Session::has('message'))
                                <p class="text-right alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                            @endif
                            <div class="form-group row mb-0">
                                <div class="col-sm-8">

                                    <button disabled class="btn " style="direction: rtl; background-color: #3f5c80;">
                                        سال{{Session('year')}}
                                    </button>

                                    <button disabled class="btn " style="direction: rtl; background-color: #3f5c80;">
                                        ترم{{Session('term')}}
                                    </button>
                                </div>
                                <label for="currentTerm_currentYear" class="col-sm-4 col-form-label text-md-right" style="float: right; text-align: right">{{ __('ترم و سال جاری') }}</label>
                            </div>
                                <br>
                            @csrf

                            <div class="form-group row">
                                <div class="col-sm-8">

                                    <select class="custom-select text-right" name="term" id="term">
                                        <option value="1">اول</option>
                                        <option value="2">دوم</option>
                                    </select>

                                </div>

                                <label for="term" class="col-sm-4 col-form-label text-md-right" style="float: right; text-align: right">{{ __('ترم') }}</label>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8">

                                    <select class="custom-select text-right" name="year" id="year">
                                        <option value="1397">۱۳۹۷</option>
                                        <option value="1398">۱۳۹۸</option>
                                        <option value="1399">۱۳۹۹</option>
                                        <option value="1400">۱۴۰۰</option>
                                        <option value="1401">۱۴۰۱</option>
                                        <option value="1402">۱۴۰۲</option>
                                        <option value="1403">۱۴۰۳</option>
                                    </select>

                                </div>

                                <label for="year" class="col-sm-4 col-form-label text-md-right" style="float: right; text-align: right">{{ __('سال') }}</label>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-block bg-primary">
                                        {{ __('ثبت') }}
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
