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

</head>
<body>

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
				<li class="col-1 nav-item">
					<a class="navbar-brand" href="#">Navbar</a>
				</li>
				<li class="col-1 nav-item align-self-center">
					<i class="fas fa-user-plus fa-2x align-middle"></i>	
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
    					<input type="text" class="form-control border-left-0" placeholder="Username">
  					</div>
				</li>
				<li class="col-2 nav-item align-self-center text-white">
					<img src="img/avatar.png" alt="" class="img-fluid w-25 rounded-circle">
					<span> Trường<span>
					<i class="fas fa-caret-down"></i>
				</li> 
			  </ul>
			</div> 
		</div>
	</nav>

	@yield('content')

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>