<!-- Thanh navbar  -->
<nav class="navbar navbar-expand-md bg-info navbar-dark fixed-top p-1">
	<div class="container">

		<!-- Toggler/collapsibe Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navbar links -->
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav row justify-content-between w-100">
				<li class="col-2 nav-item">
					<a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid w-50"></a>
				</li>
				<li class="col-1 nav-item align-self-center" style="position:relative;">
					<i class="fas fa-user-plus fa-2x align-middle" id="addfriendbtn"></i>	
					<div id="addfriendshow" class="bg-info border shadow-sm p-3" style="position:absolute; display: none; bottom: -227px; left: -100px; width: 400px;">
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-action">
							<div class="row">
								<div class="col-2"><img src="img/avatar.png" class="img-fluid rounded-circle"></div>
								<div class="col-6">Xuân Trường</div> 
							
									<div class="col-2">
										<button class="btn btn-primary"><i class="fas fa-check"></i></button>
									</div>
									<div class="col-2">
										<button class="btn btn-default"><i class="fas fa-times"></i></button>
									</div>
							
							</div>
							<br>
							<div class="row">
								<div class="col-2"><img src="img/avatar.png" class="img-fluid rounded-circle"></div>
								<div class="col-6">abcdrfgh</div> 
							
									<div class="col-2">
										<button class="btn btn-primary"><i class="fas fa-check"></i></button>
									</div>
									<div class="col-2">
										<button class="btn btn-default"><i class="fas fa-times"></i></button>
									</div>
							
							</div>
							<br>
							<div class="row">
								<div class="col-2"><img src="img/avatar.png" class="img-fluid rounded-circle"></div>
								<div class="col-6">Ác Nhân Cóc 97</div> 
							
									<div class="col-2">
										<button class="btn btn-primary"><i class="fas fa-check"></i></button>
									</div>
									<div class="col-2">
										<button class="btn btn-default"><i class="fas fa-times"></i></button>
									</div>
							
							</div>
						</a>
						
						</div>
					</div>
				</li>
				<li class="col-1 nav-item align-self-center" style="position:relative;">
					<i class="fas fa-comment-dots fa-2x align-middle" id="addMessagebtn"></i>
					<div id="addmessageshow" class="bg-info border shadow-sm p-3" style="position:absolute; display: none; bottom: -210px; left: -50px; width: 400px;">
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-action">
							<div class="row">
								<div class="col-2"><img src="img/avatar.png" class="img-fluid rounded-circle"></div>
								<div class="col-6">Xuân Trường</div>
								<div class="col-4">
									<p>noi dung tin nhan</p>	
								</div> 
								
							
							</div>
							<br>
							<div class="row">
								<div class="col-2"><img src="img/avatar.png" class="img-fluid rounded-circle"></div>
								<div class="col-6">Ác Nhân Cóc 97</div> 
								<div class="col-4">
									<p>noi dung tin nhan</p>	
								</div> 
		
							</div>
						</a>
						
						</div>
					</div>
				</li>
				<li class="col-1 nav-item align-self-center" style="position:relative;">
					<i class="fas fa-globe-americas fa-2x align-middle" id="btnThongBao"></i>
					<div id="addShowThongBao" class="bg-info border shadow-sm p-3" style="position:absolute; display: none; bottom: -211px; left: -60px; width: 400px;">
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-action">
							<div class="row">
								<div class="col-2"><img src="img/avatar.png" class="img-fluid rounded-circle"></div>
								<div class="col-4">Xuân Trường</div>
								<div class="col-6">
									<p>noi dung tin nhan dasdadasdasdasdasdas</p>	
								</div> 		
							</div>
							<br>
							<div class="row">
								<div class="col-2"><img src="img/avatar.png" class="img-fluid rounded-circle"></div>
								<div class="col-4">Xuân Trường</div>
								<div class="col-6">
									<p>noi dung tin nhan dasdadasdasdasdasdas</p>	
								</div> 		
							</div>
						</a>
						
						</div>
					</div>
				</li> 
				<li class="col-4 nav-item align-seft-center">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text border-right-0" style="background-color: white;"><i class="fa fa-search"></i></span>
						</div>
						<input type="text" class="form-control border-left-0" placeholder="Tìm kiếm...">
					</div>
				</li>
				<li class="col-2 nav-item align-self-center text-white dropdown">
					<a class="nav-link dropdown-toggle p-0" href="#" id="navbardrop" data-toggle="dropdown">
						<img src="img/avatar.png" alt="" class="img-fluid w-25 rounded-circle">
						<span> Trường<span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Link 1</a>
							<a class="dropdown-item" href="#">Link 2</a>
							<a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i>Logout</a>
						</div>
					</li> 
				</ul>
			</div> 
		</div>
	</nav>