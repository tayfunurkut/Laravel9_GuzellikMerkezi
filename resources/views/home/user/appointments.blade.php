@extends('layouts.home')

@section('title', 'Beauty-Center')


@section('content')


        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 align-self-center">
                    <p style="margin-top: 150px"><h1 class="heading mb-3 text-white">User Appointments</h1></p>
                </div>
            </div>
        </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ml-auto">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                              
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Dietitian Name</th>
                                        <th colspan="2">Appearance</th>
                                        <th>Mass Index</th>
                                        <th>Pulse</th>
                                        <th>Status</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $dl)
                                        <tr>
                                            <td>{{$dl->id}}</td>
                                            <td>{{$dl->date}}</td>
                                            <td>{{$dl->time}}</td>
                                            <td>{{$dl->order->treatment->user->name}}</td>
                                            <td>{{$dl->height}}</td>
                                            <td>{{$dl->weight}}</td>
                                            <td>{{$dl->mass_index}}</td>
                                            <td>{{$dl->pulse}}</td>
                                            <td>{{$dl->status}}</td>
                                            <td><a href="{{route('user_appointment_delete',['id'=>$dl->id])}}" onclick="return confirm('Delete! Are you sure ?')"><img src="{{asset('adminassets/icons/trash.png')}}" height="25px"></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="card-header">
                                    <div class="card-title">
                                        <a href="{{route('user_appointment_add')}}" class="btn btn-black--hover btn-info">Make an Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection