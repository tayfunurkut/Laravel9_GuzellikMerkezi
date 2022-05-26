@extends('layouts.adminbase')

@section('title', 'Service')

@section('content')

<div class="main-panel">
    <!-- en üstte olmak zorunda footer altında bittiği için div in kapaması burada açılması gerek -->

    <div class="content">
    <div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title ml-1">Service</h4>
									<h4 class="card-title"><a href="service/create" class="btn btn-success btn-lg mt-2">Create Service</a></h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Id</th>
													<th>Category</th>
													<th>Title</th>
                                                    <th>Price</th>
													<th>Images</th>
													<th>Image Gallery</th>
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
													<td>{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($tf->category, $tf->category->title)}}</td>
													<td>{{$tf->title}}</td>
                                                    <td>{{$tf->price}}</td>
													<td>
														@if ($tf->image)
															<img src="{{Storage::url($tf->image)}}" alt="" height="90" style="padding: 8px;">
														@endif


													</td>
													<td>
													<a href="{{route ('webpanel.image.index',['sid'=>$tf->id])}}" 
													onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
														<img src="{{ asset('admin')}}/assets/img/chadengle.jpg" height="90">
													</a>
													</td>
													<td>{{$tf->status}}</td>
                                                    <td><a class="btn btn-block btn-info btn-sm" href="/webpanel/service/edit/{{$tf->id}}">Edit</a></td>
													<td><a class="btn btn-block btn-danger btn-sm" href="/webpanel/service/delete/{{$tf->id}}">Delete</a></td>
													<td><a class="btn btn-block btn-success btn-sm" href="/webpanel/service/show/{{$tf->id}}">Show</a></td>
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