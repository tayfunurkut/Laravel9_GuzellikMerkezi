@extends('layouts.adminbase')

@section('title', 'Category')

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
                                    <h4 style="font-size: large" class="faqd-title">Faq List</h4>
                                    <div class="col-sm-push-6">
                                        <a href="/webpanel/faq/create" class="btn btn-md btn-inverse-primary btn-fw">Add
                                            Question</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                <th>Show</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $rs)

                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>{{$rs->question}}</td>
                                                    <td>{!!$rs->answer!!}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td><a href="/webpanel/faq/edit/{{$rs->id}}"
                                                           class="btn btn-primary btn-rounded btn-fw">Edit</a></td>
                                                    <td style="text-align: center">
                                                        <a class="btn btn-danger btn-rounded btn-fw"
                                                           style="color: white;"
                                                           href="{{route('webpanel.faq.delete',['id'=>$rs->id])}}"
                                                           ,
                                                           onclick="return confirm('Delete Are You Sure ?')">Delete</a>
                                                    </td>
                                                    <td><a href="/webpanel/faq/show/{{$rs->id}}"
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