@extends('layouts.adminbase')

@section('title', 'Category')

@section('content')


<div class="main-panel">
    <div class="content">
        <!--  bu iki kısım kesinlikle olacak -->

            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="template-demo">
                                <div class="card-body">
                                    <h4 style="font-size: large" class="card-title">Car List</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Lastname</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Status</th>
                                                <th>Delete</th>
                                                <th>Show</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $rs)

                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>{{$rs->name}}</td>
                                                    <td>{{$rs->lastname}}</td>
                                                    <td>{{$rs->phone}}</td>
                                                    <td>{{$rs->email}}</td>
                                                    <td>{{$rs->subject}}</td>
                                                    <td>{{$rs->message}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td style="text-align: center">
                                                        <a class="btn btn-danger btn-rounded btn-fw"
                                                           style="color: white;"
                                                           href="/webpanel/message/delete/{{ $rs->id }}"
                                                           ,
                                                           onclick="return confirm('Delete Are You Sure ?')">Delete</a>
                                                    </td>
                                                    <td><a href="/webpanel/message/show/{{$rs->id}}"
                                                           class="btn btn-success btn-rounded btn-fw"
                                                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
            </div>
        



@endsection