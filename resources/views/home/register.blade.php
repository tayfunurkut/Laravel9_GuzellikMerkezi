@extends('layouts.home')

@section('title', 'Beauty-Center')


@section('content')

    <div class="container" style="">
        <center>
            <h4><a href="/">Home</a>/<a href="/registeruser">User Register</a></h4>
        </center>
    </div>
    <div class="container">
        <h1>User Register</h1>
        <hr style="width: 1200px">
        @include('auth.register')
    </div>

@endsection