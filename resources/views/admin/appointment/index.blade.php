
@extends('layouts.adminbase')

@section('title', 'Category')

@section('content')


<div class="main-panel">
    <div class="content">
        <!--  bu iki kısım kesinlikle olacak -->


  <div id="content">
            <div class="card">
                <div class="card-header">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Appointments</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Service Name</th>
                                    <th>User Id</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Payment</th>
                                    <th>Note</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td><a href="/service/{{$data->service->id}}" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')">{{$data->service->title}}</a></td>
                                        <td><a href="" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')">{{$data->user_id}}</a></td>
                                        <td>{{$data->date}}</td>
                                        <td>{{$data->time}}</td>
                                        <td>{{$data->status}}</td>
                                        <td>{{$data->price}}</td>
                                        <td>{{$data->payment}}</td>
                                        <td>{{$data->note}}</td>
                                        <td><a href="/webpanel/appointment/edit/{{$data->id}}" class="btn btn-primary">Edit</a></td>
                                        <td><a href="/webpanel/appointment/delete/{{$data->id}}" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection