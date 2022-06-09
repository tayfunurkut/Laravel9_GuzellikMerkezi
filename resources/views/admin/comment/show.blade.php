@extends('layouts.adminbase')

@section('title', 'Category')

@section('content')

<div class="main-panel">
    <div class="content">
        <!--  bu iki kısım kesinlikle olacak -->

<div class="row">
        <div class="col-lg-12 grid-margin stretch-Messaged">
            <center>
                <h2>Message Detail Page</h2>
            </center>
            <div class="Messaged">
                <td><a href="/webpanel/comment/delete/{{$data->id}}"
                       class="btn btn-danger btn-rounded btn-fw">Delete</a></td>
            </div>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 30px">ID</th>
                        <td>{{$data->id}}</td>
                    </tr>
                    <tr>
                        <th style="width: 30px">Service Name</th>
                        <td><a href="/service/{{$data->service->id}}">{{$data->service->title}}</a></td>
                    </tr>

                    <tr>
                        <th style="width: 30px">Name</th>
                        <td>{{$data->user->name}}</td>
                    </tr>
                    <tr>
                        <th style="width: 30px">Comment</th>
                        <td>{{$data->comment}}</td>
                    </tr>
                    <tr>
                        <th style="width: 30px">Rate</th>
                        <td>{{$data->rate}}</td>
                    </tr>
                    <tr>
                        <th style="width: 30px">IP adresi</th>
                        <td>{{$data->ip}}</td>
                    </tr>

                    <tr>
                        <th style="width: 30px">Status</th>
                        <td>{{$data->status}}</td>
                    </tr>
                    <tr>
                        <th style="width: 30px">Created Date</th>
                        <td>{{$data->created_at}}</td>
                    </tr>
                    <form action="{{route('webpanel.comment.update', ['id'=>$data->id])}} " method="post">
                    @csrf
                    <tr>
                        <th style="width: 30px">Admin Note :</th>
                        <td>                
                                <select name="status" id="status">
                                    <option selected value="true">True</option>
                                    <option value="false">False</option>
                                </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Update</th>
                        <td><button class="btn btn-primary" type="submit">Update</button></td>
                    </tr>      
                    </form>
                </table>
            </div>
        </div>
    </div>

    @endsection