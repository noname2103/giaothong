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
					<div id="addfriendshow" class="bg-light border shadow-sm" style="position:absolute; bottom: -77px; left: -20px;">
						<ul>
							<li>123</li>
							<li>12345</li>
							<li>23213</li>
						</ul>
					</div>
				</li>
				<li class="col-1 nav-item align-self-center">
					<i class="fas fa-comment-dots fa-2x align-middle"></i>
				</li>
				<li class="col-1 nav-item align-self-center">
					<i class="fas fa-globe-americas fa-2x align-middle"></i>
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
							<a class="dropdown-item" href="{{route('logout')}}">Logout</a>
						</div>
					</li> 
				</ul>
			</div> 
		</div>
	</nav>