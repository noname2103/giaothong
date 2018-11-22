@extends('users.layout.navbar')

@section('content')
<!-- <div id="googleMap" style="width:100%;height:400px;"></div> -->

<!-- <div class="shadow-sm border" style="position: fixed; bottom: 0px; right: 50px; z-index: 9999 !important; width: 250px;">
	<div class="row bg-primary rounded-top p-2">
		<div class="col-8">Xuân Trường</div>
	</div>
	<div class="row bg-white" style="height: 300px;">
		
	</div>
	<div class="row">
		<input type="text" class="w-100 p-1">
	</div>
</div>  -->
<div id="chatbox"></div>
			<div class="mt-5 pt-4 col-12 col-md-7 col-sm-12 col-lg-6 newfeed ml-sm-0 ml-md-0 shadow-sm" style="background-color: rgba(255, 255, 255, 0.5);">
				
				@if(!empty(session('iduser')))
				@include('users.index.post_sttbox')
				@else
				<div class="alert alert-warning shadow-sm">
					<strong>Thông báo!</strong> <span class="" data-toggle="modal" data-target="#myModal">Đăng nhập</span> để có thể đăng tải bài viết.
				</div>
				@endif

				@foreach($status as $stt)

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
								<div  style="position: relavtive">
								<a href="" id="authorname{{$stt->id}}">{{$at->username}}</a><br>
								<div id="authorshow{{$stt->id}}" class="bg-light rounded shadow-sm border p-3" style="position: absolute; top: -100px; left: 0px;display: none;">
									<div class="row">
										<div class="col-3">
											<img src="img/avatar.png" alt="" class="img-fluid">
										</div>
										<div class="col-5">
											<span>{{$at->username}}</span>
										</div>
										@if($at->id != session('iduser'))
											<div class="col-4">
												<span class="btn btn-primary" id="chat{{$at->id}}" >Nhắn tin</span>
											</div>
										@endif
									</div>
								</div>
								</div>
								<script>

								$("#authorname{{$stt->id}}").mouseenter(function(){
									$("#authorshow{{$stt->id}}").show();
								});

								$("#authorname{{$stt->id}}").mouseleave(function(){
									$("#authorshow{{$stt->id}}").mouseleave(function(){
									$("#authorshow{{$stt->id}}").hide();
									});
								});
								$("#chat{{$at->id}}").click(function(){
									$.get("chat{{$at->id}}",
									function(data){
										$("#chatbox").html(data);
										//alert(data);
										//alert(data);
										//$("#danhgiabtn{{$stt->id}}").html("<i class='fas fa-grin-hearts fa-lg text-success'></i><span class='text-success font-weight-bold'> Rất hay</span>");
										//$("#comment{{$stt->id}}").prepend(data);
									});
									// alert("Đã gửi lời mời kết bạn!");
								})
								</script>
								@endif
								

								@endforeach

							<span class="text-secondary">
								<?php

									$hour = substr($stt->time,11,2);
									$hourNow = date('H');
									$day = substr($stt->time,0,2);
									$dayNow = date('d');
									$month = substr($stt->time,3,2);
									$monthNow = date('m');
									$year = substr($stt->time,6,4);
									$yearNow = date('Y');
									if($hour == $hourNow && $day == $dayNow && $month == $monthNow && $year == $yearNow)
									{
										$minute = substr($stt->time,14,2);
										$minuteNow = date('i');
										if($minuteNow - $minute == 0)
											echo "Vừa xong";
										else
										{
											$lastMinute = $minuteNow - $minute;
											echo $lastMinute." phút trước";
										}
									}
									else
									{
										if($day == $dayNow && $month == $monthNow && $year == $yearNow)
										{
											$lastHour = $hourNow - $hour;
											echo $lastHour." giờ trước";
										}
										else
										{
											if($month == $monthNow && $year == $yearNow)
											{
												$lastday = $dayNow - $day;
												if($lastday == 1)
												{
													$minutetomorrow = substr($stt->time,11,5);
													echo $minutetomorrow." hôm qua";
												}
													
												else
												echo $stt->time;

											}
											else
												echo $stt->time;
										}
									}

								?> <i class="fas fa-globe-americas"></i></span>
							</div>
							<div class="col-2">
								<i class="fas fa-ellipsis-v float-right"></i>
							</div>
						</div>

						<!-- Phan noi dung chu viet status -->
						<div class="row mt-1">
							<div class="col-12">
								<p class="mb-1 mt-1">{{$stt->content}}</p>
							</div>
						</div>
					</div>
					<!-- Phan hinh anh status -->
					<div class="row">
						<div class="col-12">
							@if($stt->images != '')
								<img src="img/{{$stt->images}}" alt="" class="img-fluid">
							@endif

							@if($stt->lat != '')
								<div id="googleMapStatus{{$stt->id}}"></div>
								<script type="text/javascript">
									$("#googleMapStatus{{$stt->id}}").css({"width": "100%", "height": "200px", "margin-bottom": "10px"});
									var mapDiv = document.getElementById('googleMapStatus{{$stt->id}}');
									
									var lat = {{$stt->lat}};
									var lon = {{$stt->lon}};
									var options = { 
										zoom:17,
										center:{lat:lat,lng:lon}
									}
									var map=new google.maps.Map(mapDiv, options);

									var marker = new google.maps.Marker({
										position:{lat:lat,lng:lon},
										map:map
									});
								</script>
							@endif
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
							<div class="col-4 text-center p-2 btn-in-status" style="position: relative;">
								<a class="text-danger" id="danhgiabtn{{$stt->id}}">
									<?php $flat = 0; ?>
									@foreach($reviews as $rv)
										@if($rv->idstt == $stt->id && $rv->iduser == session('iduser'))
											@if($rv->rev == 'good')
												<i class='fas fa-grin-hearts fa-lg text-success'></i><span class='text-success font-weight-bold'> Rất hay</span>
											@endif
											@if($rv->rev == 'normal')
												<i class='fas fa-grin-alt fa-lg text-warning'></i><span class='text-warning font-weight-bold'> Bình thường</span>
											@endif
											@if($rv->rev == 'bad')
												<i class='fas fa-tired fa-lg text-danger'></i><span class='text-danger font-weight-bold'> Dở tệ</span>
											@endif
											<?php $flat = 1; ?>
										@endif
									@endforeach
									<?php if($flat == 0)
											echo "<i class='fa fa-gavel fa-lg '></i> Đánh giá</a>";
									?>
								<div class="bg-light rounded-top shadow-sm p-2 border border-bottom-0" id="danhgiashow{{$stt->id}}"" style="position: absolute; top: -49px; left: 0px; display:none;">
									<div class="row">
										<i class="fas fa-grin-hearts fa-2x col-4 text-success" data-toggle="tooltip" data-placement="top" title="Rất hay" id="good{{$stt->id}}"></i>
										<i class="fas fa-grin-alt fa-2x col-4 text-warning" data-toggle="tooltip" data-placement="top" title="Bình thường" id="normal{{$stt->id}}"></i>
										<i class="fas fa-tired fa-2x col-4 text-danger" data-toggle="tooltip" data-placement="top" title="Tệ lắm" id="bad{{$stt->id}}"></i>
									</div>	
								</div>
							</div>
							<div class="col-4 text-center p-2 btn-in-status">
								<a class="text-info" id="comment-btn{{$stt->id}}"><i class="fa fa-coffee fa-lg"></i> Thảo luận</a>
							</div>
							<div class="col-4 text-center p-2 btn-in-status">
								<a href="" class="text-warning"><i class="fa fa-link fa-lg"></i> Chia sẻ</a>
							</div>
						</div>

						<script>

							$("#good{{$stt->id}}").click(function(){
								$.get("confirm{{$stt->id}}/good",
									function(data){
										//alert(data);
										$("#danhgiabtn{{$stt->id}}").html("<i class='fas fa-grin-hearts fa-lg text-success'></i><span class='text-success font-weight-bold'> Rất hay</span>");
										//$("#comment{{$stt->id}}").prepend(data);
									});
							});
							$("#normal{{$stt->id}}").click(function(){
								$.get("confirm{{$stt->id}}/normal",
									function(data){
										//alert(data);
										$("#danhgiabtn{{$stt->id}}").html("<i class='fas fa-grin-alt fa-lg text-warning'></i><span class='text-warning font-weight-bold'> Bình thường</span>");
										//$("#comment{{$stt->id}}").prepend(data);
									});
							});
							$("#bad{{$stt->id}}").click(function(){
								$.get("confirm{{$stt->id}}/bad",
									function(data){
										//alert(data);
										$("#danhgiabtn{{$stt->id}}").html("<i class='fas fa-tired fa-lg text-danger'></i><span class='text-danger font-weight-bold'> Dở tệ</span>");
										//$("#comment{{$stt->id}}").prepend(data);
									});
							});
							$("#danhgiabtn{{$stt->id}}").mouseenter(function(){
								$("#danhgiashow{{$stt->id}}").show();
							});
							$("#danhgiabtn{{$stt->id}}").mouseleave(function(){
								$("#danhgiashow{{$stt->id}}").mouseleave(function(){
									$("#danhgiashow{{$stt->id}}").hide();
								});
							});
						    $("#comment-btn{{$stt->id}}").click(function(){
    							$("#comment-box{{$stt->id}}").slideToggle();
							});
							
						</script>
						<div id="comment-box{{$stt->id}}">

							@if(empty(session('iduser')))
							<div class="alert alert-warning shadow-sm mt-3">
								<strong>Thông báo!</strong> <span class="" data-toggle="modal" data-target="#myModal">Đăng nhập</span> để có thể bình luận bài viết.
							</div>
							@else
							<div class="row mt-2" >
								<div class="col-12">
									<div class="input-group">
										<input type="text" name="comment" id="cmtcontent{{$stt->id}}" class="form-control" placeholder="Nhập bình luận...">
										<div class="input-group-append">
											<span id="postcomment{{$stt->id}}" class="btn btn-primary">Bình luận</span>
										</div>
									</div>
								</div>
							</div>
							<script>
								$("#postcomment{{$stt->id}}").click(function(){
									var content = $("#cmtcontent{{$stt->id}}").val();
									$.get("postcomment{{$stt->id}}/"+content,
										function(data){
											$("#comment{{$stt->id}}").prepend(data);
										});
										$("#cmtcontent{{$stt->id}}").val('');	
											
								});
								</script>
							@endif

							<div id="comment{{$stt->id}}">
								@foreach($comment as $cmt)
								@if($cmt->idstt == $stt->id)
								<div class="row mt-2 pr-3">
										<div class="col-2 pr-1">
											<img src="img/avatar.png" class="img-thumbnail w-90 rounded">
										</div>
										<div class="col-10 pr-4 w-100 pb-1 bg-light border rounded  comment-content">
											<div class="row justify-content-between">
												<div class="col-10 col-sm-10 col-lg-10">
													<a href="" class="name-in-comment">
														@foreach($author as $at)
															@if($at->id == $cmt->author)
																{{$at->username}}
															@endif
														@endforeach
													 </a>:
													<span class="text-secondary time-of-comment"> <?php

														$hour = substr($cmt->time,11,2);
														$hourNow = date('H');
														$day = substr($cmt->time,0,2);
														$dayNow = date('d');
														$month = substr($cmt->time,3,2);
														$monthNow = date('m');
														$year = substr($cmt->time,6,4);
														$yearNow = date('Y');
														if($hour == $hourNow && $day == $dayNow && $month == $monthNow && $year == $yearNow)
														{
															$minute = substr($cmt->time,14,2);
															$minuteNow = date('i');
															if($minuteNow - $minute == 0)
																echo "Vừa xong";
															else
															{
																$lastMinute = $minuteNow - $minute;
																echo $lastMinute." phút trước";
															}
														}
														else
														{
															if($day == $dayNow && $month == $monthNow && $year == $yearNow)
															{
																$lastHour = $hourNow - $hour;
																echo $lastHour." giờ trước";
															}
															else
															{
																if($month == $monthNow && $year == $yearNow)
																{
																	$lastday = $dayNow - $day;
																	if($lastday == 1)
																	{
																		$minutetomorrow = substr($cmt->time,11,5);
																		echo $minutetomorrow." hôm qua";
																	}
																		
																	else
																	echo $cmt->time;

																}
																else
																	echo $cmt->time;
															}
														}

														?> <i class="fa fa-clock-o"></i></span>
												</div>
												<div class="col-1 col-sm-1 col-lg-2 align-self-end">
													<i class="fa fa-ellipsis-h align-middle"></i>
												</div>
											</div>

											<div class="row ">
												<div class="col-12 text-justify pr-2">
													<span>{{$cmt->content}}</span>
												</div>
											</div>

										</div>
									</div>
								@endif
								@endforeach
							</div>

						</div>
					</div>
				</div>
				@endforeach
			</div>
			
		</div>
	</div>
</div>



@endsection