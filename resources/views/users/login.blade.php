<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dang nhap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <div class="w-100 mt-5 mb-5 bg-white row shadow-sm border rounded">
            <div class="col-lg-8 col-sm-0 d-none d-sm-none d-lg-flex p-3">
                <div id="demo" class="carousel slide " data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/banner1.jpg" alt="Los Angeles" class="img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner1.jpg" alt="Chicago">
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner1.jpg" alt="New York">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
            </div>

            <div class="col-lg-4 col-sm-12 pt-3 pb-3 pr-4 ">
                <div class="row border rounded">
                    <div class="col-12 text-center bg-light">
                        <h2> Đăng nhập</h2>
                    </div>
                    <div class="col-12 p-3">
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="col-12 pb-3">
                        <input type="password" name="email" class="form-control">
                    </div>
                    <div class="col-12 bg-light p-3">
                        <div class="row">
                            <div class="col-7">
                                <div class="checkboxThree align-middle m-0">
                                    <input type="checkbox" value="1" id="checkboxThreeInput" name="" class="d-none"/>
                                    <label for="checkboxThreeInput"></label>
                                </div> Lưu đăng nhập
                            </div>
                            <div class="col-5">
                                <input type="submit" name="email" class="form-control" value="Đăng nhập">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <form action="{{route('PostLogin')}}" method="post">
        {{ csrf_field() }}
        <input type="text" name="email" class="form-control">
        <input type="password" name="password">
        <input type="submit">
    </form> -->

    <div class="city2"></div>
    <div class="road bot">
			<!-- <div  class="moto"><img src="img/moto.png" width="30px" alt="Xe mo to"></div>
			<div  class="moto2"><img src="img/moto2.png" width="45px" alt=""></div>
			<div  class="car"><img src="img/car2.png" width="70px" alt=""></div>
			<div  class="police-car"><img src="img/policecar.png" width="100px" alt=""></div>
			<div  class="car3"><img src="img/car4.png" width="160px" alt=""></div>
			<div  class="cotden"><img src="img/cotden.png" width="20px" alt=""></div> -->
            <div class="shipper shadow-sm"><img src="img/shipper.png" width="160px"></div>

        </div>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
    </html>