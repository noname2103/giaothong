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
						<a class="list-group-item list-group-item-action" id="account"><i class="fas fa-id-badge"></i> Trang cá nhân</a>
						<span id="showaccount" class="rounded-0">
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-search"></i> Xem trang</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-users"></i> Tạo nhóm</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
						</span>
						<span  class="list-group-item list-group-item-action" id="mapm"><i class="fas fa-map"></i> Bản đồ</span>
						<span id="showmap" class="rounded-0">
						
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-search"></i> Xem bản đồ</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-map-pin"></i> Ping kẹt xe</a>
						</span>
						<a class="list-group-item list-group-item-action" id="car"><i class="fas fa-car"></i> Xe ô tô</a>
						<span id="showcar" class="rounded-0">
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-street-view"></i> Thi bằng lái</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-book"></i>
							Tài liệu</a>
							
						</span>
						<a class="list-group-item list-group-item-action" id="scooter"><i class="fas fa-motorcycle"></i> Xe máy</a>
						<span id="showscooter" class="rounded-0">
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-street-view"></i> Thi bằng lái</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-map-marker-alt"></i> Ping kẹt xe</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-book"></i>
							Tài liệu</a>
							
						</span>

						<a class="list-group-item list-group-item-action" id="bus"><i class="fas fa-bus-alt"></i> Xe buýt</a>
						<span id="showbus" class="rounded-0"> 
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-search-location"></i> Tra cứu</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-map-marker-alt"></i></i> Tìm đường</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-info-circle"></i> Báo cáo xe</a>
						</span>
						<a class="list-group-item list-group-item-action" id="GopY"><i class="fas fa-edit"></i> Góp ý</a>
						<span id="showGopY" class="rounded-0"> 
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-question-circle"></i> Giới thiệu</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-pen"></i> Gửi góp ý</a>
							
						</span>
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

				@foreach ($status as $stt)

				<div class="post bg-white rounded shadow-sm border z-3 mt-3">
					<!-- Thong tin tac gia -->
					<div class="pt-3 pr-3 pl-3">
						<div class="row">
							<div class="col-2 pr-0 avatar-post align-self-center">
								<img src="img/avatar.png" alt="" class="rounded-circle img-fluid shadow-sm w-75">
							</div>
							<div class="col-8 pl-0">
								@foreach($author as $at)
								@if($stt->author == $at->id)
								<a href="">{{$at->username}}</a><br>
								@endif
								@endforeach

								{{$stt->time}}
								<?php

								$day = substr($stt->time,0,2);
								$daynow = date('d');
								$month = substr($stt->time,3,2);
								$monthnow = date('m');
								$year = substr($stt->time,6,4);
								$yearnow = date('Y');
								if($day == $daynow && $month == $monthnow && $year == $yearnow)
								{


									$hour = substr($stt->time,11,2);
									$hourNow = date('H'); 
									$lastHour = $hourNow - $hour;


									if ($lastHour < 24) {
										$minute = substr($stt->time,14,2);
										$minuteNow = date('i');
										$minuteLast = $minuteNow - $minute;
										
											if ($minuteLast == 0) {
												echo "Vừa xong";
											}elseif ($minuteLast < 60 && $minuteLast != 0) {
												echo "<span>".$minuteLast." phút trước";
											}elseif($minuteLast > 60){
												echo "<span>".$lastHour." giờ trước";
											}

									}

								}
										// 	$hour = substr($stt->time,11,2);
										// 	$hournow = date('H');
										// 	$lasthour = $hournow - $hour;
										// 	if($lasthour < 24 )
										// 	{
										// 		$second = substr($stt->time,14,2);
										// 		$secondnow = date('i');
										// 		$lastsecond = $secondnow - $second;
										// 		if($lastsecond == 0)
										// 			echo "Vừa xong";
										// 		if($lastsecond < 60 && $lastsecond != 0)
										// 			echo "<span>".$lastsecond." phút trước";
										// 		else
										// 			echo "<span>".$lasthour." giờ trước";
										// 	}

										// }
										// else
										// {
										// 	echo "<span>".$stt->time." phút trước";
										// }


								?> <i class="fas fa-globe-americas"></i></span>
							</div>
							<div class="col-2">
								<i class="fas fa-ellipsis-v float-right"></i>
							</div>
						</div>

						<!-- Phan noi dung chu viet status -->
						<div class="row mt-1">
							<div class="col-12">
								<p>{{$stt->content}}</p>
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
							<script type="text/javascript">
								$(document).ready(function(){
									$("#postcomment{{$stt->id}}").click(function(){
			    							//$.post('postcomment{{$stt->id}}',function(data){
			    								alert(1);
    											//$("#chatbox").html(data);
    										//});
    									});
								});
							</script>
							<div class="row mt-2" >
								<div class="col-12">
									<div class="input-group">
										<input type="text" name="" class="form-control" placeholder="Nhập bình luận...">
										<div class="input-group-append">
											<button id="postcomment{{$stt->id}}" class="btn btn-primary">Bình luận</button>
										</div>
									</div>
								</div>
							</div>
							@endif

							<div id="comment{{$stt->id}}"></div>

						</div>
					</div>
				</div>
				@endforeach
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