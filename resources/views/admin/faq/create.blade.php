@extends('layouts.adminbase')

@section('title', 'Category')

@section('content')


<div class="main-panel">
    <div class="content">
        <!--  bu iki kısım kesinlikle olacak -->


        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Faq Menu</h4>

                            <form class="form" action="{{ route('webpanel.faq.store') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Question</label>
                                    <input type="text" name="question" class="form-control"
                                           placeholder="Write Question">
                                </div>
                                <div class="form-group">
                                    <label>Answer</label>
                                    <textarea style="width: 100%; height: 150px;" class="form-check" id="answer" name="answer"
                                              placeholder="Write Your Answer"></textarea>
                                  
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection