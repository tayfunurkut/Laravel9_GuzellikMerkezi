@extends('layouts.adminbase')

@section('title', 'Create Category')

@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection()

@section('content')

<div class="main-panel">
    <!-- en üstte olmak zorunda footer altında bittiği için div in kapaması burada açılması gerek -->

    <div class="content">
        <form action="{{ route('webpanel.service.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row ml-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Parent Category</label>
                        <select name="category_id" class="form-control" id="">
                            <option value="0" selected>Main Category</option>
                            @foreach($data as $tf)
                                <option value="{{ $tf->id }}">{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($tf, $tf->title)}}</option>
                            @endforeach
                            </select>
                        
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email2">Title</label>
                        <input type="text" name="title" class="form-control" id="email2" placeholder="Title">
                        
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password">Keywords</label>
                        <input type="text" name="keywords" class="form-control" id="password" placeholder="Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password">Description</label>
                        <input type="text" name="description" class="form-control" id="password" placeholder="Description">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password">Price</label>
                        <input type="number" name="price" class="form-control" id="password" placeholder="0">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password">Detail</label><br>
                        <textarea class="form-control" name="detail" id="detail">

                        </textarea>
                        <script>
                        ClassicEditor
                                .create( document.querySelector( '#detail' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password">Image</label>
                        <input type="file" name="image" class="form-control" id="password" placeholder="Password">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="smallSelect">Status</label>
                        <select name="status" class="form-control" id="smallSelect">
                            <option value="true">True</option>
                            <option value="false">False</option>
                        </select>
                    </div>
                </div>

                <div class="form-group ml-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

                 </div>
            </form>
    </div>

   

@endsection()