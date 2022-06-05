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
                <td><a href="/webpanel/message/delete/{{$data->id}}"
                       class="btn btn-danger btn-rounded btn-fw">Delete</a></td>
            </div>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 30px">ID</th>
                        <td>{{$data->id}}</td>
                    </tr>
                    <tr>
                        <th style="width: 30px">Name</th>
                        <td>{{$data->name}}</td>
                    </tr>
                    <tr>
                        <th style="width: 30px">Lastname</th>
                        <td>{{$data->lastname}}</td>
                    </tr>
                    <tr>
                        <th style="width: 30px">Phone</th>
                        <td>{{$data->phone}}</td>
                    </tr>
                    <tr>
                        <th style="width: 30px">Email</th>
                        <td>{{$data->email}}</td>
                    </tr>
                    <tr>
                        <th style="width: 30px">Subject</th>
                        <td>{{$data->subject}}</td>
                    </tr>
                    <tr>
                        <th style="width: 30px">Message</th>
                        <td>{{$data->message}}</td>
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
                        <th style="width: 30px">Admin Note :</th>
                        <td>
                            <form action="{{route('webpanel.message.update', ['id'=>$data->id])}} " method="post">
                                @csrf
                                <textarea class="textarea" cols="100" id="note" name="note">{{$data->note}}</textarea>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    @endsection