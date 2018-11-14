<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Giao thông</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>

	<!-- Thanh navbar - bang den giao thong -->
	<nav class="navbar navbar-expand-md bg-info navbar-dark fixed-top p-1">
			<div class="container">
			<!-- Brand -->
			
			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			  <span class="navbar-toggler-icon"></span>
			</button>
		  
			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
			  <ul class="navbar-nav row justify-content-between w-100">
				<li class="col-3 nav-item">
					<a class="navbar-brand" href="#">Navbar</a>
				</li>
				<li class="col-3 nav-item align-self-center">
					<i class="fas fa-user-plus fa-2x align-middle"></i>	
				</li>
				<li class="col-3 nav-item align-self-center">
				  	<i class="fas fa-comment-dots fa-2x align-middle"></i>
				</li>
				<li class="col-3 nav-item align-self-center">
					<i class="fas fa-globe-americas fa-2x align-middle"></i>
				</li> 
			  </ul>
			</div> 
		</div>
		  </nav>

	<div class="body">
		<div class="container">
		<div class="row">
			<div class="mt-5 pt-4 col-lg-2 col-sm-0 position-fixed d-none d-sm-none d-xl-block">
				<div class="bg-info rounded shadow-sm border p-2">
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-action"><i class="fas fa-home"></i> Trang chủ</a>
						<a href="#" class="list-group-item list-group-item-action"><i class="fas fa-id-badge"></i> Trang cá nhân</a>
						<span  class="list-group-item list-group-item-action" id="mapm"><i class="fas fa-map"></i> Bản đồ</span>
						<span id="showmap" class="rounded-0">
							<a href="#" class="list-group-item list-group-item-action pl-5"><i class="fas fa-street-view"></i> Xem bản đồ</a>
							<a href="#" class="list-group-item list-group-item-action pl-5"><i class="fas fa-map-marker-alt"></i> Ping kẹt xe</a>
						</span>
						<a href="#" class="list-group-item list-group-item-action"><i class="fas fa-car"></i> Xe ô tô</a>
						<a href="#" class="list-group-item list-group-item-action"><i class="fas fa-motorcycle"></i> Xe máy</a>
						<a href="#" class="list-group-item list-group-item-action"><i class="fas fa-bus-alt"></i> Xe buýt</a>
						<a href="#" class="list-group-item list-group-item-action"><i class="fas fa-edit"></i> Góp ý</a>
					</div>
				</div>
			</div>

			<div class="mt-5 pt-4 col-12 col-sm-12 col-lg-6 newfeed ml-sm-0 shadow-sm" style="background-color: rgba(255, 255, 255, 0.5);">
					<div class="bg-light rounded shadow-sm border">
							<div class="row border-bottom mr-1 ml-1">
								<div class="col-4 col-sm-4 border-right p-1 pl-2 text-center">
									<a href="" class=""><i class="fa fa-pencil"></i> Đăng bài viết</a>
								</div>
								<div class="col-5 col-sm-5 border-right p-1 pl-2 text-center">
									<a href=""><i class="fa fa-image"></i> Album ảnh/ video</a>
								</div>
								<div class="col-3 col-sm-3 p-1 pl-2 text-center">
									<a href=""><i class="fa fa-video-camera"></i> Trực tiếp</a>
								</div>
							</div>
							<div class="row bg-white ml-1 mr-1 border-bottom mb-2">
								<div class="col-md-2 col-sm-2 col-2 align-self-center pr-0">
									<img src="img/avatar.png" width="38px" class="rounded-circle img-fluid">
								</div>
								<div class="col-md-10 col-sm-10 col-10 pl-0 ">
									<textarea class="w-100 pl-0 pr-3 pt-3 pb-3" id="status" placeholder="Bạn đang nghĩ gì vậy?" rows="1" onkeyup="getVal();"></textarea>
								</div>
							</div>
							<div class="row ml-1 mr-1 mb-2 justify-content-center">
								<div class="col-4 bg-white rounded ml-1 border p-1">Ảnh/video</div>
								<div class="col-3 bg-white rounded ml-1 border p-1"><i class="fa fa-code"></i> Code</div>
								<div class="col-3 bg-white rounded ml-1 border p-1">Cảm xúc</div>
							</div>
						</div>

				<div class="post bg-white rounded shadow-sm border z-3 mt-3">
					<!-- Thong tin tac gia -->
					<div class="pt-3 pr-3 pl-3">
					<div class="row">
						<div class="col-2 pr-0 avatar-post align-self-center">
							<img src="img/avatar.png" alt="" class="rounded-circle img-fluid shadow-sm w-75">
						</div>
						<div class="col-8 pl-0">
							<a href="">Xuan Truong</a><br>
							<span>2 gio truoc</span>
						</div>
						<div class="col-2">
							<i class="fas fa-ellipsis-v float-right"></i>
						</div>
					</div>

					<!-- Phan noi dung chu viet status -->
					<div class="row mt-1">
							<div class="col-12">
								<p>The border-width property can have from one to four values (for the top border, right border, bottom border, and the left border).</p>
							</div>
					</div>
					</div>
						<!-- Phan hinh anh status -->
						<div class="row">
							<div class="col-12">
								<img src="img/thiolympic.jpg" alt="" class="img-fluid">
							</div>
						</div>
						<div class="pb-3 pr-3 pl-3">
						<!-- Phan danh gia bai viet -->
						<div class="row m-2">
							<div class="col-12 pl-0 pr-0">
								<div class="progress">
									<div class="progress-bar" style="width:70%">Hay</div>
								</div>
							</div>
						</div>

						<div class="row border-top border-bottom ml-0 mr-0">
								<div class="col-4 text-center p-2 btn-in-status">
									<a href="" class="text-danger"><i class="fa fa-gavel fa-lg "></i> Đánh giá</a>
								</div>
								<div class="col-4 text-center p-2 btn-in-status">
									<a href="" class="text-info"><i class="fa fa-coffee fa-lg"></i> Thảo luận</a>
								</div>
								<div class="col-4 text-center p-2 btn-in-status">
									<a href="" class="text-warning"><i class="fa fa-link fa-lg"></i> Chia sẻ</a>
								</div>
						</div>

						<div class="row mt-2">
								<div class="col-12">
									<div class="input-group">
										<input type="text" name="" class="form-control" placeholder="Nhập bình luận...">
										<div class="input-group-append">
											<button href="" class="btn btn-primary">Bình luận</button>
										</div>
									</div>
								</div>
							</div>
			
							<div class="row mt-2 pr-3">
								<div class="col-2 pr-1">
									<img src="img/avatar.png" class="img-thumbnail w-90 rounded">
								</div>
								<div class="col-10 pr-4 w-100 pb-1 bg-light border rounded  comment-content">
									<div class="row justify-content-between">
										<div class="col-10 col-sm-10 col-lg-11">
											<a href="" class="name-in-comment">Xuân Trường </a>:
											<span class="text-secondary time-of-comment"> 1 giờ trước <i class="fa fa-clock-o"></i></span>
										</div>
										<div class="col-1 col-sm-1 col-lg-1 align-self-end">
											<i class="fa fa-ellipsis-h align-middle"></i>
										</div>
									</div>
			
									<div class="row ">
										<div class="col-12 text-justify pr-2">
											<span>Chào mừng các bạn đến với hội thi olympic tin học Hutech, đây là một sân chơi lớn với hi vọng tìm ra đội tuyển xuất sắc nhất để tham dự các kỳ thi sắp tới. </span>
										</div>
									</div>
			
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		</div>
	</div>

	<div class="city bot">
		
	</div>
	<div class="road bot">
			<div  class="moto"><img src="img/moto.png" width="30px" alt="Xe mo to"></div>
			<div  class="moto2"><img src="img/moto2.png" width="45px" alt=""></div>
			<div  class="car"><img src="img/car2.png" width="70px" alt=""></div>
			<div  class="car3"><img src="img/car4.png" width="160px" alt=""></div>
			<div  class="cotden"><img src="img/cotden.png" width="20px" alt=""></div>
	</div>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>