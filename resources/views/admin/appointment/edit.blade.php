

@extends('layouts.adminbase')

@section('title', 'Category')

@section('content')


<div class="main-panel">
    <div class="content">
        <!--  bu iki kısım kesinlikle olacak -->

  <div class="card">
                <div class="card-header">

                    <div class="card-header py-3">
                        <h2 class="m-0 font-weight-bold text-primary">Edit Appointment</h2>
                    </div>
                    <div class="card-body">
                        @include('home.messages')
                            <form role="form" action="/webpanel/appointment/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Id</label>
                                        <p class="form-control">{{$data->id}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Service Id</label>
                                        <p class="form-control">{{$data->service_id}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>User Id</label>
                                        <p class="form-control">{{$data->user_id}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Date</label>
                                        <p class="form-control">{{$data->date}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Time</label>
                                        <p class="form-control">{{$data->time}}</p>
                                    </div>

                                    <div class="form-group">
                                        <label>Price</label>
                                        <p class="form-control">{{$data->price}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Payment</label>
                                        <p class="form-control">{{$data->payment}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Ip</label>
                                        <p class="form-control">{{$data->ip}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Admin Note</label>
                                        <textarea id="summernote" class="form-control" name="note">{{$data->note}}</textarea>
                                        <script>
                                            $(document).ready(function() {
                                                $('#summernote').summernote();
                                            });
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control select2" name="status" style="width: 100%">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>Accepted</option>
                                            <option>Completed</option>
                                            <option>Denied</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Appointment</button>
                                </div>
                            </form>

                       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Service Id</th>
                                    <th>User Id</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Payment</th>
                                    <th>Note</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td><a href="" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')">{{$data->service_id}}</a></td>
                                        <td><a href="" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')">{{$data->user_id}}</a></td>
                                        <td>{{$data->date}}</td>
                                        <td>{{$data->time}}</td>
                                        <td>{{$data->status}}</td>
                                        <td>{{$data->price}}</td>
                                        <td>{{$data->payment}}</td>
                                        <td>{{$data->note}}</td>
                                        <td><a href="/webpanel/appointment/edit/{{$data->id}}" class="btn btn-primary">Edit</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection