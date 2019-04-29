@extends('layouts.app')

@role('admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}

                            </div>
                        @endif
                        {{Session('term')}}
                        {{--{{$test}}--}}
                            admin
                        <br>
                        {{Session('year')}}
                        <br>
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@endrole



@role('student')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

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
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@endrole
