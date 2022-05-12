@extends('layouts.adminwindow')

@section('title', 'Service Image Gallery')
@section('content')
    <h3>{{$service->title}}</h3>
    <form class="forms-sample" action="{{route ('webpanel.image.store',['sid'=>$service->id])}}" method="post" enctype="multipart/form-data">
        @csrf

		
        <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" class="form-control" required name="title" placeholder="Title">
            <div class="input-group col-xs-12">
                <input type="file" class="form-control file-upload-info" name="image" required placeholder="upload image">
            </div>
        </div>
        <button type="submit" class="btn btn-primary me-2 ml-2">Ekle</button>
    </form>
    <div class="card mt-3">
                  <div class="card-body">
                      <div class="col-sm-6">
                          <h4 class="card-title">Service Image List</h4>
                      </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($images as $tf)
                          <tr>
                            <td>{{$tf->id}}</td>
                            <td>{{$tf->title}}</td>
                            <td>
                                @if ($tf->image)
                               	 <img src="{{Storage::url($tf->image)}}" style="height:90px">
                                @endif
                            </td>
                            <td><a href="{{route ('webpanel.image.destroy',['sid'=>$service->id,'id'=>$tf->id])}}" <button class="btn btn-danger"
                              onclick="return confirm('Deleting are you sure')">Delete</a></button></td>

                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

@endsection

