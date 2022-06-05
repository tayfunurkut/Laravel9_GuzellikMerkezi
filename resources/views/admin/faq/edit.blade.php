@extends('layouts.adminbase')

@section('title', 'Category')

@section('content')


<div class="main-panel">
    <div class="content">
        <!--  bu iki kısım kesinlikle olacak -->


        <div class="container-fluid">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">EDIT FAQ : {{$data->title}}</h4>

                            <form class="form" action="/webpanel/faq/update/{{$data->id}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Question</label>
                                    <input style="width: 100%;" type="text" name="question" class="form-check" value="{{$data->question}}">
                                </div>
                                <div class="form-group">
                                    <label>Answer</label>
                                    <textarea style="width: 100%; height: 150px;" class="textarea" id="answer" name="answer">"{{$data->answer}}"</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>




@endsection