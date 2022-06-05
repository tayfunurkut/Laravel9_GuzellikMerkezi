<div class="sidebar sidebar-style-2" data-background-color="dark2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset('admin')}}/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									
								</span>
							</a>
							<div class="clearfix"></div>

						
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="/webpanel" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
							
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Appointments</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="components/avatars.html">
											<span class="sub-item">New Appointments</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Accepted Appointments</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Shipping Appointments</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Completed Appointments</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="{{ route('webpanel.category.index')}}">
								<i class="fas fa-table"></i>
								<p>Category</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('webpanel.service.index')}}">
								<i class="fas fa-th-list"></i>
								<p>Services</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="#forms">
								<i class="fa fa-pen-square"></i>
								<p>Comments</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#tables">
								<i class="fas fa-table"></i>
								<p>Faq</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#maps">
								<i class="fas fa-map-marker-alt"></i>
								<p>Messages</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#charts">
								<i class="far fa-chart-bar"></i>
								<p>Users</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="widgets.html">
								<i class="fas fa-desktop"></i>
								<p>Social</p>
							</a>
						</li>


						<li class="nav-item">
							<a href="settings" class="nav-link">
								<i class="nav-icon far fa-circle text-danger"></i>
								<p class="text">Settings</p>
							</a>
         				</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->