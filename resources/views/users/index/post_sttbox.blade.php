<div class="bg-light rounded shadow-sm border">
	<form action="{{route('UpStt')}}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
					<div class="row border-bottom mr-1 ml-1">
						<div class="col-5 col-sm-5 col-lg-4 border-right p-1 pl-2 text-center">
							<a href="" class=""><i class="	far fa-edit"></i> Đăng bài viết</a>
						</div>
								<!-- <div class="col-5 col-sm-5 border-right p-1 pl-2 text-center">
									<a href=""><i class="fa fa-image"></i> Album ảnh/ video</a>
								</div>
								<div class="col-3 col-sm-3 p-1 pl-2 text-center">
									<a href=""><i class="fa fa-video-camera"></i> Trực tiếp</a>
								</div> -->
							</div>
							<div class="row bg-white ml-1 mr-1 border-bottom mb-2">
								<div class="col-md-2 col-sm-2 col-2 align-self-center pr-0">
									<img src="img/avatar.png" width="38px" class="rounded-circle img-fluid">
								</div>
								<div class="col-md-10 col-sm-10 col-10 pl-0 ">
									<textarea class="w-100 pl-0 pr-3 pt-3 pb-3" id="status" placeholder="Bạn có cần giúp đỡ không?" rows="1" onkeyup="getVal();" name="contentstt"></textarea>
									<div id="googleMap"></div>
								</div>
							</div>
							<div class="row ml-1 mr-1 mb-2 justify-content-center">
								<input type="text" id="lat" name="lat" style="display:none">
								<input type="text" id="lon" name="lon" style="display:none">
								<input type="file" id="file" name="imagestatus" style="display:none">
								<div class="col-lg-3 col-2 bg-white rounded ml-1 border p-1"><label for="file" class="btn btn-primary w-100 mb-0"><i class="fas fa-image"></i><span class="d-none d-lg-inline"> Ảnh/video</span></label></div>
								<div class="col-lg-2 col-2 bg-white rounded ml-1 border p-1"><span class="btn btn-primary w-100" id="btn-add-position"><i class="fas fa-map-marker-alt"></i><span class="d-none d-lg-inline"> Vị trí</span></span></div>
								<div class="col-lg-3 col-2 bg-white rounded ml-1 border p-1"><span class="btn btn-primary w-100"><i class="fa fa-tag"></i><span class="d-none d-lg-inline"> Gắn thẻ</span></span></div>
								<div class="col-lg-3 col-5 rounded ml-1  p-0 align-self-center pl-3"><input type="submit" class="btn btn-primary w-100 h-100 align-middle shadow-sm" value="Đăng bài"></div>
							</div>
						</div>
	</form>