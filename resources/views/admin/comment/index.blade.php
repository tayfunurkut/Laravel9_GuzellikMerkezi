@extends('layouts.adminbase')

@section('title', 'Comment Review List')

@section('content')


<div class="main-panel">
    <div class="content">
        <!--  bu iki kısım kesinlikle olacak -->

        <div class="container-fluid">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-faqd">
                    <div class="card">
                        <div class="card-body">
                            <div class="template-demo">
                                <div class="faqd-body">
                                    <h4 style="font-size: large" class="faqd-title">Comment List</h4>
                                   
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Service</th>
                                                <th>Username</th>
                                                <th>Comment</th>
                                                <th>Status</th>
                                                <th>Rate</th>
                                                <th>Delete</th>
                                                <th>Show</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $rs)

                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td><a href="/service/{{$rs->service->id}}">{{$rs->service->title}}</a></td>
                                                    <td>{{$rs->user->name}}</td>
                                                    <td>{{$rs->comment}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td>{{$rs->rate}}</td>
                                                    <td style="text-align: center">
                                                        <a class="btn btn-danger btn-rounded btn-fw"
                                                           style="color: white;"
                                                           href="{{route('webpanel.comment.delete',['id'=>$rs->id])}}"
                                                           ,
                                                           onclick="return confirm('Delete Are You Sure ?')">Delete</a>
                                                    </td>
                                                    <td><a href="/webpanel/comment/show/{{$rs->id}}"
                                                           class="btn btn-success btn-rounded btn-fw">Show</a></td>
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
                <div class="col-md-12 grid-margin astretch-faqd">
                    <div class="faqd">
                        <div class="faqd-body">
                            <h4 class="faqd-title">Footer</h4>

                            <div class="template-demo">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>



@endsection