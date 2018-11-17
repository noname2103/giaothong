<!-- Thanh navbar  -->
<nav class="navbar navbar-expand-md bg-info navbar-dark shadow-sm fixed-top p-1">
	<div class="container">

		<!-- Toggler/collapsibe Button -->
			<span class=" d-sm-block d-md-none">GT</span>
			<span class="fas fa-user-plus fa-lg d-sm-block d-md-none"></span>
			<span class="fas fa-comment-dots fa-lg d-sm-block d-md-none"></span>
			<span class="fas fa-globe-americas fa-lg d-sm-block d-md-none"></span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
			
		</button>
		<div class="collapse navbar-collapse" id="Delete">
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
										<button class="btn btn-primary btn-sm"><i class="fas fa-check"></i></button>
									</div>
									<div class="col-2">
										<button class="btn btn-default btn-sm"><i class="fas fa-times"></i></button>
									</div>
							
							</div>
							<br>
							<div class="row">
								<div class="col-2"><img src="img/avatar.png" class="img-fluid rounded-circle"></div>
								<div class="col-6">abcdrfgh</div> 
							
									<div class="col-2">
										<button class="btn btn-primary btn-sm"><i class="fas fa-check"></i></button>
									</div>
									<div class="col-2">
										<button class="btn btn-default btn-sm"><i class="fas fa-times"></i></button>
									</div>
							
							</div>
							<br>
							<div class="row">
								<div class="col-2"><img src="img/avatar.png" class="img-fluid rounded-circle"></div>
								<div class="col-6">Ác Nhân Cóc 97</div> 
							
									<div class="col-2">
										<button class="btn btn-primary btn-sm"><i class="fas fa-check"></i></button>
									</div>
									<div class="col-2">
										<button class="btn btn-default btn-sm"><i class="fas fa-times"></i></button>
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
							<a class="dropdown-item" href="#"><i class="fas fa-user"></i>Thông tin tài khoản</a>
							<a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Cài đặt</a>
							<a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i>Logout</a>
						</div>
					</li> 
				</ul>
			</div>
			</div>
		<!-- Navbar links -->
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			
			<div class="list-group mt-2 d-block d-sm-block d-md-none">
			<a href="{{route('ViewHome')}}" class="list-group-item list-group-item-action"><i class="fas fa-home"></i> Trang chủ</a>
						<a class="list-group-item list-group-item-action" id="account"><i class="fas fa-id-badge"></i> Trang cá nhân</a>
			<span id="showaccount" class="rounded-0" style="display: none">
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-search"></i> Xem trang</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-users"></i> Tạo nhóm</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
						</span>
						<a  class="list-group-item list-group-item-action" id="mapm"><i class="fas fa-map"></i> Bản đồ</a>
						<span id="showmap" class="rounded-0" style="display: none">
						
							<a href="{{route('ViewMap')}}" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-search"></i> Xem bản đồ</a>
							<a id="pingtraffic" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-map-pin"></i> Ping kẹt xe</a>
						</span>
				<a class="list-group-item list-group-item-action" id="car"><i class="fas fa-car"></i> Xe ô tô</a>
						<span id="showcar" class="rounded-0" style="display: none">
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-street-view"></i> Thi thử</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-book"></i>
							Tài liệu</a>
							
						</span>
						<a class="list-group-item list-group-item-action" id="scooter"><i class="fas fa-motorcycle"></i> Xe máy</a>
						<span id="showscooter" class="rounded-0" style="display: none">
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-street-view"></i> Thi thử</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-book"></i>Tài liệu</a>
							
						</span>

						<a class="list-group-item list-group-item-action" id="bus"><i class="fas fa-bus-alt"></i> Xe buýt</a>
						<span id="showbus" class="rounded-0" style="display: none"> 
							<a href="{{route('BusSearch')}}" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-search-location"></i> Tra cứu</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-map-marker-alt"></i></i> Tìm đường</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-info-circle"></i> Báo cáo xe</a>
						</span>
						<a class="list-group-item list-group-item-action" id="GopY"><i class="fas fa-edit"></i> Góp ý</a>
						<span id="showGopY" class="rounded-0" style="display: none"> 
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-question-circle"></i> Giới thiệu</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-pen"></i> Gửi góp ý</a>
							
						</span>
			</div>
		</div>
	</nav>