@extends('layouts.adminbase')

@section('title', 'Admin Panel')

@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection()

@section('content')

<div class="main-panel">
		<div class="content">
            		<!-- her content sayfasında main-panel clasına sahip bir div açılmalı -->
        
        <div class="container-fluid">
        <form class="form" action="/webpanel/setting/update" method="post"
                      enctype="multipart/form-data">
                    @csrf
            <div class="row">
                    <div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">SETTINGS</h4>
								</div>
								<div class="card-body">
									<ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-home-tab-nobd" data-toggle="pill" href="#pills-home-general" role="tab" aria-controls="pills-home-nobd" aria-selected="true">General</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-smtp" role="tab" aria-controls="pills-profile-nobd" aria-selected="false">Smtp E-Mail</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-social" role="tab" aria-controls="pills-contact-nobd" aria-selected="false">Social Medya</a>
										</li>
                                        <li class="nav-item">
											<a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-about" role="tab" aria-controls="pills-contact-nobd" aria-selected="false">About Us</a>
										</li>
                                        <li class="nav-item">
											<a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-contact" role="tab" aria-controls="pills-contact-nobd" aria-selected="false">Contact Page</a>
										</li>
                                        <li class="nav-item">
											<a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-references" role="tab" aria-controls="pills-contact-nobd" aria-selected="false">References</a>
										</li>
									</ul>
									<div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
										<div class="tab-pane fade show active" id="pills-home-general" role="tabpanel" aria-labelledby="pills-home-tab-nobd">
                                        <h4 class="card-title">General Settings</h4>
                                                        <input type="hidden" id="id" name="id"
                                                               value="1">
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Title</label>
                                                            <input type="text" class="form-control"
                                                                   name="title" value="{{$data->title}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Keywords</label>
                                                            <input type="text" class="form-control"
                                                                   name="keywords" value="{{$data->keywords}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Description</label>
                                                            <input type="text" class="form-control"
                                                                   name="description"
                                                                   value="{{$data->description}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Company</label>
                                                            <input type="text" class="form-control"
                                                                   name="company" value="{{$data->company}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Address</label>
                                                            <input type="text" class="form-control"
                                                                   name="address" value="{{$data->address}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Phone</label>
                                                            <input type="tel" class="form-control"
                                                                   name="phone" value="{{$data->phone}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail3">Email address</label>
                                                            <input type="email" class="form-control"
                                                                   name="email" value="{{$data->email}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleSelectGender">Status</label>
                                                            <select class="form-control" name="status">
                                                                <option selected>{{$data->status}}</option>
                                                                <option>True</option>
                                                                <option>False</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Icon</label>
                                                            <input type="file" name="icon"
                                                                   class="file-upload-default">
                                                        </div>
										</div>


										<div class="tab-pane fade" id="pills-profile-smtp" role="tabpanel" aria-labelledby="pills-profile-tab-nobd">
                                        <h4 class="card-title">SMTP E-MAIL SETTINGS</h4>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">SMTP SERVER</label>
                                                            <input type="text" class="form-control"
                                                                   name="smtpserver" value="{{$data->smtpserver}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail3">SMTP E-mail</label>
                                                            <input type="email" name="smtpemail"
                                                                   class="form-control" id="exampleInputEmail3"
                                                                   value="{{$data->email}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword4">SMTP
                                                                Passsword</label>
                                                            <input type="password" name="smtppassword"
                                                                   class="form-control"
                                                                   id="exampleInputPassword4"
                                                                   value="{{$data->password}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">SMTP Port</label>
                                                            <input type="number" class="form-control"
                                                                   name="smtpport" value="{{$data->smtpport}}">
                                                        </div>
										</div>


										<div class="tab-pane fade" id="pills-contact-social" role="tabpanel" aria-labelledby="pills-contact-tab-nobd">
                                        <h4 class="card-title">SOCIAL MEDIA</h4>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Fax</label>
                                                            <input type="text" class="form-control"
                                                                   name="fax" value="{{$data->fax}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Facebook</label>
                                                            <input type="text" class="form-control"
                                                                   name="facebook" value="{{$data->facebook}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Instagram</label>
                                                            <input type="text" class="form-control"
                                                                   name="instagram" value="{{$data->instagram}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Twitter</label>
                                                            <input type="text" class="form-control"
                                                                   name="twitter" value="{{$data->twitter}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Youtube</label>
                                                            <input type="text" class="form-control"
                                                                   name="youtube" value="{{$data->youtube}}">
                                                        </div>
                                        </div>


                                        <div class="tab-pane fade" id="pills-contact-about" role="tabpanel" aria-labelledby="pills-contact-tab-nobd">
                                        <h4 class="card-title">About Us</h4>
                                                        <div class="form-group">
                                                            <label for="exampleTextarea1">About Us</label>
                                                            <textarea name="aboutus"
                                                                      class="form-control" id="aboutus"
                                                                      rows="4">{{$data->aboutus}}
                                                            </textarea>
                                                        </div>
                                                        <script>
                ClassicEditor
                        .create( document.querySelector( '#aboutus' ) )
                        .then( editor => {
                                console.log( editor );
                        } )
                        .catch( error => {
                                console.error( error );
                        } );
                </script>
                                                        
										</div>


                                        <div class="tab-pane fade" id="pills-contact-contact" role="tabpanel" aria-labelledby="pills-contact-tab-nobd">
                                        <h4 class="card-title">Contact Page</h4>
                                                        <div class="form-group">
                                                            <label for="exampleTextarea1">Contact</label>
                                                            <textarea name="contact"
                                                                      class="form-control" id="contact"
                                                                      rows="4">{{$data->contact}}
                                                            </textarea>
                                                        </div>
                                                        <script>
                ClassicEditor
                        .create( document.querySelector( '#contact' ) )
                        .then( editor => {
                                console.log( editor );
                        } )
                        .catch( error => {
                                console.error( error );
                        } );
                </script>
										</div>


                                        <div class="tab-pane fade" id="pills-contact-references" role="tabpanel" aria-labelledby="pills-contact-tab-nobd">
                                        <h4 class="card-title">References</h4>
                                                        <div class="form-group">
                                                            <label for="exampleTextarea1">References</label>
                                                            <textarea name="references"
                                                                      class="form-control" id="referencess"
                                                                      rows="4">{{$data->references}}</textarea>
                                                        </div>
                                                        <script>
                ClassicEditor
                        .create( document.querySelector( '#references' ) )
                        .then( editor => {
                                console.log( editor );
                        } )
                        .catch( error => {
                                console.error( error );
                        } );
                </script>
										</div>
                                        <button type="submit" class="btn btn-primary mt-3 col-12">
                                            Update
                                            Setting
                                        </button>
                                        
									</div>
								</div>
							</div>
						</div>
            </div>
        </form>
        </div>

@endsection()