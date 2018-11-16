@extends('users.layout.navbar')

@section('content')
<!-- <div id="googleMap" style="width:100%;height:400px;"></div> -->
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
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-street-view"></i> Xem bản đồ</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-map-marker-alt"></i> Ping kẹt xe</a>
						</span>
						<a href="#" class="list-group-item list-group-item-action"><i class="fas fa-car"></i> Xe ô tô</a>
						<a class="list-group-item list-group-item-action" id="scooter"><i class="fas fa-motorcycle"></i> Xe máy</a>
						<span id="showscooter" class="rounded-0">
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-street-view"></i> Thi bằng lái</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-map-marker-alt"></i> Ping kẹt xe</a>
						</span>
						<a href="#" class="list-group-item list-group-item-action"><i class="fas fa-bus-alt"></i> Xe buýt</a>
						<a href="#" class="list-group-item list-group-item-action"><i class="fas fa-edit"></i> Góp ý</a>
					</div>
				</div>
			</div>

			<div class="mt-5 pt-4 col-12 col-sm-12 col-lg-6 newfeed ml-sm-0 shadow-sm" style="background-color: rgba(255, 255, 255, 0.5);">
				
				@if(!empty(session('iduser')))
					@include('users.index.post_sttbox')
				@else
					<div class="alert alert-warning shadow-sm">
    					<strong>Thông báo!</strong> <span class="" data-toggle="modal" data-target="#myModal">Đăng nhập</span> để có thể đăng tải bài viết.
  					</div>
				@endif
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
										<a class="text-danger"><i class="fa fa-gavel fa-lg "></i> Đánh giá</a>
									</div>
									<div class="col-4 text-center p-2 btn-in-status">
										<a class="text-info" id="comment-btn"><i class="fa fa-coffee fa-lg"></i> Thảo luận</a>
									</div>
									<div class="col-4 text-center p-2 btn-in-status">
										<a href="" class="text-warning"><i class="fa fa-link fa-lg"></i> Chia sẻ</a>
									</div>
								</div>


								<div id="comment-box">
								
								@if(empty(session('iduser')))
									<div class="alert alert-warning shadow-sm mt-3">
    									<strong>Thông báo!</strong> <span class="" data-toggle="modal" data-target="#myModal">Đăng nhập</span> để có thể bình luận bài viết.
  									</div>
								@else
									<div class="row mt-2" >
										<div class="col-12">
											<div class="input-group">
												<input type="text" name="" class="form-control" placeholder="Nhập bình luận...">
												<div class="input-group-append">
													<button href="" class="btn btn-primary">Bình luận</button>
												</div>
											</div>
										</div>
									</div>
								@endif


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
		</div>

		<div class="city bot">

		</div>
		<div class="road bot">
			<div  class="moto"><img src="img/moto.png" width="30px" alt="Xe mo to"></div>
			<div  class="moto2"><img src="img/moto2.png" width="45px" alt=""></div>
			<div  class="car"><img src="img/car2.png" width="70px" alt=""></div>
			<div  class="police-car"><img src="img/policecar.png" width="100px" alt=""></div>
			<div  class="car3"><img src="img/car4.png" width="160px" alt=""></div>
			<div  class="cotden"><img src="img/cotden.png" width="20px" alt=""></div>
		</div>
		@endsection