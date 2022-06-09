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
            <li><a href="/userpanel/myappointments">My Appointments</a></li>
            <li><a href="/logoutuser">Logout</a></li>
        </ul>
        </div>
        <div class="col-md-10">
           
        <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Service</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Status</th>
                                                <th>Price</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($appointment as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td><a href="/service/{{$rs->service->id}}">{{$rs->service->title}}</a></td>
                                                    <td>{{$rs->date}}</td>
                                                    <td>{{$rs->time}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td>{{$rs->price}}</td>
                                                    <td style="text-align: center">
                                                        <a class="btn btn-danger btn-rounded btn-fw"
                                                           style="color: white;"
                                                           href="/userpanel/myappointments/delete/{{$rs->id}}"
                                                           ,
                                                           onclick="return confirm('Delete Are You Sure ?')">Delete</a>
                                                    </td>
                                                
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
      

        </div>
    </div>
</div>


@endsection