@extends('layouts.home')

@section('title', 'Beauty-Center')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2">
        <ul class="nav nav-stacked">
            <li class="active">
                <a href="/">Home</a>
                </li>
            <li><a href="/userpanel/comment">My Comments</a></li>
            <li><a href="#">My Appointments</a></li>
            <li><a href="/logoutuser">Logout</a></li>
        </ul>
        </div>
        <div class="col-md-10">
            @include('profile.show')

        </div>
    </div>
</div>


@endsection