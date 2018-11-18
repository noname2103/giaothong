<!-- Thanh navbar  -->
<nav class="navbar navbar-expand-md bg-info navbar-dark shadow-sm fixed-top p-1">
	<div class="container ml-lg-5 pl-lg-5">

		<!-- Toggler/collapsibe Button -->
		<span class=" d-sm-block d-md-none">GT</span>
		<span class="fas fa-user-plus fa-lg d-sm-block d-md-none"></span>
		<span class="fas fa-comment-dots fa-lg d-sm-block d-md-none"></span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#notification">
			<span class="fas fa-globe-americas fa-lg d-sm-block d-md-none"></span>
		</button>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="notification">
			<div class="list-group mt-2 d-block d-sm-block d-md-none">
				<a class="list-group-item list-group-item-action account"><i class="fas fa-id-badge"></i> Trang cá nhân</a>
				<span  class="rounded-0 showaccount" style="display: none">
					<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-search"></i> Xem trang</a>
					<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-users"></i> Tạo nhóm</a>
					<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
				</span>
			</div>
		</div>
		<div class="collapse navbar-collapse" id="Delete">
			<ul class="navbar-nav row justify-content-between w-100">
				<li class="col-2 nav-item">
					<a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid w-50"></a>
				</li>
				<li class="col-1 nav-item align-self-center" style="position:relative;">
					<i class="fas fa-user-plus fa-2x align-middle" id="addfriendbtn"></i>	
					<div id="addfriendshow" class="bg-info border shadow-sm p-3" style="position:absolute; display: none; bottom: -205px; left: -100px; width: 500px;">
						<div class="list-group">
							<span href="#" class="list-group-item list-group-item-action">123
								<!-- <div class="col-2"><img src="img/avatar.png" alt="" width="50px"></div>
								<div class="col-4"><a href="#">Xuân Trường</a></div>
								<div class="col-2 align-self-center"><a href="#" class="btn btn-success align-middle">Chấp nhận</a></div>
								<div class="col-2 align-self-center"><a href="#" class="btn btn-danger">Từ chối</a></div> -->
							</span>
							<a href="#" class="list-group-item list-group-item-action">Second item</a>
							<a href="#" class="list-group-item list-group-item-action">Third item</a>
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
							<a class="dropdown-item" href="#"><i class="fas fa-user"></i>Thông tin tài khoản</a>
							<a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Cài đặt</a>
							<a class="dropdown-item" href="{{route('Logout')}}"><i class="fas fa-sign-out-alt"></i>Logout</a>
						</div>
					</li> 
				</ul>
			</div>
		</div>
		<!-- Navbar links -->
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			
			<div class="list-group mt-2 d-block d-sm-block d-md-none">
				<a href="{{route('ViewHome')}}" class="list-group-item list-group-item-action"><i class="fas fa-home"></i> Trang chủ</a>
				<a class="list-group-item list-group-item-action account"><i class="fas fa-id-badge"></i> Trang cá nhân</a>
				<span  class="rounded-0 showaccount" style="display: none">
					<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-search"></i> Xem trang</a>
					<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-users"></i> Tạo nhóm</a>
					<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
				</span>
				<a  class="list-group-item list-group-item-action mapm" ><i class="fas fa-map"></i> Bản đồ</a>
				<span  class="rounded-0 showmap" style="display: none">

					<a href="{{route('ViewMap')}}" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-search"></i> Xem bản đồ</a>
					<a id="pingtraffic" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-map-pin"></i> Ping kẹt xe</a>
				</span>
				<a class="list-group-item list-group-item-action Car"><i class="fas fa-car"></i> Xe ô tô</a>
				<span class="rounded-0 showcar" style="display: none">
					<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-street-view"></i> Thi thử</a>
					<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-book"></i>
					Tài liệu</a>

				</span>
				<a class="list-group-item list-group-item-action scooter" ><i class="fas fa-motorcycle"></i> Xe máy</a>
				<span  class="rounded-0 showscooter" style="display: none">
					<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-street-view"></i> Thi thử</a>
					<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-book"></i>Tài liệu</a>

				</span>

				<a class="list-group-item list-group-item-action bus" ><i class="fas fa-bus-alt"></i> Xe buýt</a>
				<span  class="rounded-0 showbus" style="display: none"> 
					<a href="{{route('BusSearch')}}" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-search-location"></i> Tra cứu</a>
					<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-map-marker-alt"></i></i> Tìm đường</a>
					<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-info-circle"></i> Báo cáo xe</a>
				</span>
				<a class="list-group-item list-group-item-action GopY" ><i class="fas fa-edit"></i> Góp ý</a>
				<span  class="rounded-0 showGopY" style="display: none"> 
					<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-question-circle"></i> Giới thiệu</a>
					<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-pen"></i> Gửi góp ý</a>

				</span>
				<a href="{{route('Logout')}}" class="list-group-item list-group-item-action"><i class="fas fa-home"></i> Đăng xuất</a>
			</div>
		</div>
	</div>
</nav>