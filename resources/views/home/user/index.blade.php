@extends('layouts.home')

@section('title', 'Beauty-Center')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <h1>User Menu</h1>
        </div>
        <div class="col-md-10">
            @include('profile.show')

        </div>
    </div>
</div>


@endsection