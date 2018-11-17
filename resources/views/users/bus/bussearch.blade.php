@extends('users.layout.navbar')

@section('content')

<div class="mt-5 pt-4 col-12 col-sm-12 col-lg-6 newfeed ml-sm-0 shadow-sm" style="background-color: rgba(255, 255, 255, 0.5);">

    <div class="">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-bus"></i></span>
          </div>
          <input type="text" class="form-control" id="busnumber" placeholder="Nhập số tuyến xe buýt...">
      </div>
  </div>
  <div id="busshow">
    <div class="bg-light rounded row shadow-sm border p-2 m-0 mb-1">
        <div class="col-3 p-0 align-self-center"><img src="img/busimg.jpg" alt="" class="img-fluid"></div>
        <div class="col-6"><a href="">Xe buýt số 125</a><br>Hoạt động: 9:30 - 7:40<br>Bến Thành - BX. Miền Đông</div>
        <div class="col-3 align-self-center"><a href="" class="btn btn-primary align-middle">Chi tiết</a></div>
    </div>
    <div class="bg-light rounded row shadow-sm border p-2 m-0 mb-1">
        <div class="col-3 p-0 align-self-center"><img src="img/busimg.jpg" alt="" class="img-fluid"></div>
        <div class="col-6"><a href="">Xe buýt số 843</a><br>Hoạt động: 9:30 - 7:40<br>Bến Thành - BX. Miền Đông</div>
        <div class="col-3 align-self-center"><a href="" class="btn btn-primary align-middle">Chi tiết</a></div>
    </div>
</div>
</div>
<!-- Noi quy di xe buyt -->
<div class=" pt-4 col-0 col-sm-0 col-lg-3 ml-sm-0 bg-primary d-none d-sm-none d-lg-block rounded shadow-sm" style="position: fixed; top: 10%; right: 9%;">
    <div class="col-12 bg-light rounded align-self-center">
        <h4 class="text-warning">Lưu ý</h4>
    </div>
    <div class="col-12 bg-light rounded mb-2">
    23233213
    </div>
</div>

@endsection