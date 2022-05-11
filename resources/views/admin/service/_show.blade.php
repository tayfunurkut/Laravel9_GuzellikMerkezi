@extends('layouts.adminbase')

@section('title', 'Show Category')

@section('content')

<div class="main-panel">
    <!-- en üstte olmak zorunda footer altında bittiği için div in kapaması burada açılması gerek -->

    <div class="content">
        <div class="row mt-3 ml-2"> 
            <div class="col-md-4">
            <a style="height: 40px; display:flex; justify-content:center; align-items:center;" class="btn btn-block btn-info btn-sm" href="{{ route('webpanel.service.edit',['id'=>$data->id])}}"><b>Edit</b></a>
            </div>
            <div class="col-md-8"">
                 <a style="height: 40px; width: 400px; display:flex; justify-content:center; align-items:center;" class="btn btn-block btn-danger btn-sm" href="/webpanel/service/delete/{{$data->id}}"><b>Delete</b></a>
            </div>
        </div>
        
    <div class="card ml-2 mt-3">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <tbody>
                  <tr>
                     <th style="width: 60px;">Id</th>
                      <td>{{$data->id}}</td>
                    </tr>
                    <tr>
                     <th>Category Id</th>
                     <!-- $data->id  -->
                      <td>
                     {{$data->category->title}}
                    </td>
                    </tr>
                    <tr>
                    <tr>
                     <th>Title</th>
                      <td>{{$data->title}}</td>
                    </tr>
                    <tr>
                     <th>Keywords</th>
                      <td>{{$data->keywords}}</td>
                    </tr>
                    <tr>
                     <th>Detay</th>
                      <td>{{$data->detail}}</td>
                    </tr>
                    <tr>
                     <th>Fiyat</th>
                      <td>{{$data->price}}</td>
                    </tr>
                    <tr>
                     <th>Image</th>
                      <td>

                      @if ($data->image)
															<img src="{{Storage::url($data->image)}}" alt="" height="90" style="padding: 8px;">
											@endif

                      </td>
                    </tr>
                    <tr>
                     <th>Status</th>
                      <td>{{$data->status}}</td>
                    </tr>
                    <tr>
                     <th>Created At</th>
                      <td>{{$data->created_at}}</td>
                    </tr>
                    <tr>
                     <th>Updated At</th>
                      <td>{{$data->updated_at}}</td>
                    </tr>
                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
    
    </div>

   

@endsection()