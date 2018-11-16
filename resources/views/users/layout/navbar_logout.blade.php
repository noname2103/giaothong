<!-- Thanh navbar  -->
<nav class="navbar navbar-expand-md bg-info navbar-dark fixed-top p-1">
	<div class="container">
		<ul class="navbar-nav row w-100 justify-content-between">
			<li class="col-2 col-sm-2  col-md-2 col-lg-2   nav-item">
				<a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid w-50 w-sm-100"></a>
			</li>
			<li class="col-10 ol-sm-10 col-md-9 col-lg-5 c  nav-item align-self-end">
				<button type="button" class="btn btn-warning shadow-sm float-right" data-toggle="modal" data-target="#myModal">Đăng nhập</button>

				<button class="btn btn-warning shadow-sm float-right mr-2">Đăng ký</button>
			</li>
		</ul>
	</div> 
</nav>
<!-- The Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header bg-light">
				<h4 class="modal-title">Đăng nhập</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form action="{{route('PostLogin')}}" method="post">
				{{ csrf_field() }}
			<!-- Modal body -->
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-envelope"></i></span>
								</div>
								<input type="text" class="form-control border-left-0" name="email" placeholder="Email">
							</div>
						</div>
						<div class="col-12 mt-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" class="form-control border-left-0" name="password" placeholder="Mật khẩu">
							</div>
						</div>
						<div class="col-12 mt-3">
							<input type="submit" name="submit" class="btn btn-primary float-right" value="Đăng nhập">
						</div>
					</div>
				</div>
			</div>
			</form>

		</div>
	</div>
</div>