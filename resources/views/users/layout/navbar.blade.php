<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Giao thông</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0irDdchNMM2Gnz3aGqfTuPm6zKvImS64"></script>

</head>
<body>

	@if(!empty(session('iduser')))
		@include('users.layout.navbar_login')
	@else
		@include('users.layout.navbar_logout')
	@endif

<div class="body">
	<div class="container">
		<div class="row">
			<div class="mt-5 pt-4 col-lg-2 col-sm-0 position-fixed d-none d-sm-none d-xl-block">
				<div class="bg-info rounded shadow-sm border p-2">
					<div class="list-group">
						<a href="{{route('ViewHome')}}" class="list-group-item list-group-item-action"><i class="fas fa-home"></i> Trang chủ</a>
						<a class="list-group-item list-group-item-action" id="account"><i class="fas fa-id-badge"></i> Trang cá nhân</a>
						<span id="showaccount" class="rounded-0" style="display: none">
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-search"></i> Xem trang</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-users"></i> Tạo nhóm</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
						</span>
						<span  class="list-group-item list-group-item-action" id="mapm"><i class="fas fa-map"></i> Bản đồ</span>
						<span id="showmap" class="rounded-0" style="display: none">
						
							<a href="{{route('ViewMap')}}" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-search"></i> Xem bản đồ</a>
							<a id="pingtraffic" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-map-pin"></i> Ping kẹt xe</a>
						</span>
						<script>
							$("#pingtraffic").click(function(){
								if(navigator.geolocation){
									var nav = navigator.geolocation;
									var pos = nav.getCurrentPosition(showPosition);

									function showPosition(position)
									{
										var lat = position.coords.latitude;
										var lon = position.coords.longitude;

										$.get("pingtraffic"+lat+"/"+lon,
										function(data){
											alert(data);
										});
									}
								}
							});
						</script>
						<a class="list-group-item list-group-item-action" id="car"><i class="fas fa-car"></i> Xe ô tô</a>
						<span id="showcar" class="rounded-0" style="display: none">
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-street-view"></i> Thi bằng lái</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-book"></i>
							Tài liệu</a>
							
						</span>
						<a class="list-group-item list-group-item-action" id="scooter"><i class="fas fa-motorcycle"></i> Xe máy</a>
						<span id="showscooter" class="rounded-0" style="display: none">
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-street-view"></i> Thi bằng lái</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-map-marker-alt"></i> Ping kẹt xe</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0"><i class="fas fa-book"></i>
							Tài liệu</a>
							
						</span>

						<a class="list-group-item list-group-item-action" id="bus"><i class="fas fa-bus-alt"></i> Xe buýt</a>
						<span id="showbus" class="rounded-0" style="display: none"> 
							<a href="{{route('BusSearch')}}" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-search-location"></i> Tra cứu</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-map-marker-alt"></i></i> Tìm đường</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-info-circle"></i> Báo cáo xe</a>
						</span>
						<a class="list-group-item list-group-item-action" id="GopY"><i class="fas fa-edit"></i> Góp ý</a>
						<span id="showGopY" class="rounded-0" style="display: none"> 
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-question-circle"></i> Giới thiệu</a>
							<a href="#" class="list-group-item list-group-item-action pl-5 rounded-0 border-bottom-0"><i class="fas fa-pen"></i> Gửi góp ý</a>
							
						</span>
					</div>
				</div>
			</div>
	@yield('content')

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
	<!-- jQuery library -->


	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	
</body>
</html>