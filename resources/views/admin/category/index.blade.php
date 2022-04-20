@extends('layouts.adminbase')

@section('title', 'Category')

@section('content')


<div class="main-panel">
    <div class="content">
        <!--  bu iki kısım kesinlikle olacak -->


        <div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title ml-1">Category</h4>
									<h4 class="card-title"><a href="category/create" class="btn btn-success btn-lg mt-2">Create Category</a></h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Id</th>
													<th>Title</th>
													<th>Keywords</th>
													<th>Description</th>
													<th>Image</th>
													<th>Status</th>
                                                    <th>Edit</th>
													<th>Delete</th>
													<th>Show</th>
												</tr>
											</thead>
											
											<tbody>
                                                @foreach($data as $tf)
												<tr>
													<td>{{$tf->id}}</td>
													<td>{{$tf->title}}</td>
													<td>{{$tf->keywords}}</td>
													<td>{{$tf->description}}</td>
													<td>
														@if ($tf->image)
															<img src="{{Storage::url($tf->image)}}" alt="" height="90" style="padding: 8px;">
														@endif


													</td>
													<td>{{$tf->status}}</td>
                                                    <td><a class="btn btn-block btn-info btn-sm" href="/webpanel/category/edit/{{$tf->id}}">Edit</a></td>
													<td><a class="btn btn-block btn-danger btn-sm" href="/webpanel/category/delete/{{$tf->id}}">Delete</a></td>
													<td><a class="btn btn-block btn-success btn-sm" href="/webpanel/category/show/{{$tf->id}}">Show</a></td>
												</tr>
											@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>


    </div>

@endsection()