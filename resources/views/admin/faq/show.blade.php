@extends('layouts.adminbase')

@section('title', 'Category')

@section('content')


<div class="main-panel">
    <div class="content">
        <!--  bu iki kısım kesinlikle olacak -->

        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 style="font-size: large" class="card-title">Faq Details</h4>
                            <div>
                                <td><a href="/webpanel/faq/edit/{{$data->id}}"
                                       class="btn btn-primary btn-rounded btn-fw">Edit</a></td>
                                <td><a href="/webpanel/faq/delete/{{$data->id}}"
                                       class="btn btn-danger btn-rounded btn-fw">Delete</a></td>
                            </div>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="width: 30px">ID</th>
                                        <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">ID</th>
                                        <td>{{$data->question}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">ID</th>
                                        <td>{!!$data->answer!!}</td>
                                    </tr>

                                    <tr>
                                        <th style="width: 30px">Status</th>
                                        <td>{{$data->status}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Created Date</th>
                                        <td>{{$data->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Updated Date</th>
                                        <td>{{$data->updated_at}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection