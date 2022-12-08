<?php
// 
// session_start();
include('../../admin/config/config.php');
if (isset($_POST['dangky']) && $_POST['email'] != '' && $_POST['pass']!='') {
	# code...
	$hovaten =$_POST['hovaten'];
	$email=$_POST['email'];
	$matkhau=$_POST['pass'];
	$dienthoai=$_POST['dienthoai'];
	$diachi=$_POST['diachi'];
    $gioitinh=$_POST['gender'];
    // $sql_dangky=mysqli_query($mysqli,"INSERT INTO tbl_dangky(ten_dangky,email,matkhau,gioitinh,diachi,dienthoai) values ('".$hovaten."','".$email."','".$matkhau."','".$gioitinh."','".$diachi."','".$dienthoai."')");
    
    $sql_check ="SELECT * from tbl_dangky where email='".$email."' ";
    $query=mysqli_query($mysqli,$sql_check);

    

    // $matkhau=md5($password);
    if (mysqli_num_rows($query) > 0) {
        header('Location:signup.php');
        # code...
    }else {
        $sql_dangky=mysqli_query($mysqli,"INSERT INTO tbl_dangky(ten_dangky,email,matkhau,gioitinh,diachi,dienthoai) values ('".$hovaten."','".$email."','".$matkhau."','".$gioitinh."','".$diachi."','".$dienthoai."')");
    
        mysqli_query($mysqli,$sql_dangky);
        $_SESSION['ten_dangky']=$ten;
        $_SESSION['email'] = $email;
        echo '<p style="color:green">Bạn đã đăng kí thành công</p>';
        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
        // header('Location:../../index1.php?quanly=giohang');
    
        # code...
    
        # code...

        ?>
        <script> location.replace("../../index1.php"); </script>

        <?php
    }


} 
 ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dolce far niente Template">
    <meta name="keywords" content="Dolce far niente, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dolce far niente</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="../../index1.php"><img src="../../img/logo9.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                    <ul>
                        
                        <li class="active"><a href="../../index1.php">Trang chủ</a></li>
                        <li><a href="../../index1.php">Hãng Sản Xuất</a>
                                <?php 
                                $sql_danhmuc ="SELECT * FROM tbl_nhaphattrien ORDER BY thutu ASC";
                                $query_danhmuc =mysqli_query($mysqli,$sql_danhmuc);
                                ?>

                            <ul class="header__menu__dropdown">
                            <?php

                            while ($row=mysqli_fetch_array($query_danhmuc)) {

                            ?>
                            <li><a href="../../index1.php?quanly=nhaphattrien&id=<?php echo $row['thutu'] ?>"><?php echo $row['ten_nhaphattrien'] ?></a></li>
                           
                                            <?php 
                                            } 
                                            ?>
                            </ul>
                            </li>
                            <li><a href="#">Tài khoản</a>
                            <ul class="header__menu__dropdown">
                              
                              <li><a href="../../admin/login.php">Admin</a></li>

                                  <li><a href="signup.php">Đăng ký</a></li>
                                  <li><a href="changeinfo.php">Đổi mật khẩu</a></li>
                                  <li><a href="changeinfo.php">Đổi thông tin cá nhân</a></li>
                                  <li><a href="../../index1.php?quanly=giohang">Giỏ hàng</a></li>
                                  <li><a href="../../index1.php?quanly=donhangdadat">Lịch sử đơn hàng</a></li>
                              </ul>
                            </li>
                            <li><a href="./login1.php">Đăng nhập</a></li>
                        </ul>
                    </nav>
                </div> 
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="../../img/4.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Đăng ký tài khoản</h2>
                        <div class="breadcrumb__option">
                            <a href="../../index1.php">Trang chủ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Đăng ký</h4>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">


                        <div class="checkout__input">
                             <label for="first" class="mb-2 mr-sm-2">Full Name</label>
                                    <input id="full" type="text" name="hovaten" class="form-control mb-2 mr-sm-2" placeholder="Full name" required>
                            </div>

<!-- 
                            <div class="row">
                            <div class="col-lg-6">
                                    <label for="first" class="mb-2 mr-sm-2">Full Name</label>
                                    <input id="full" type="text" name="hovaten" class="form-control mb-2 mr-sm-2" placeholder="Full name" required>
                                </div>
                              
                            </div> -->
                            <div class="checkout__input">
                            <label for="address">Địa Chỉ</label>
                            <input id="diachi" type="text" class="form-control" placeholder="Địa Chỉ" name="diachi" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please enter your Address </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                    <label for="sdt">Số Điện Thoại</label>
                            <input id="sdt" type="text" class="form-control" placeholder="Số điện thoại" name="dienthoai" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please enter your phone number</div>
                                    </div>
                                </div>
                                <div class="form-group">
                            <label>Gender</label>
                            <div>
                                <input id="male" type="radio" name="gender" value="Nam">
                                <label for="male">Male</label>
                                <input id="female" type="radio" name="gender" value="Nữ">
                                <label for="female">Female</label>
                            </div>
                        </div>
                                
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                    <label for="email">Email</label>
                            <input id="email" type="email" name="email" class="form-control" placeholder="Email" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please enter Email </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
            
                                <label for="pass">Password</label>
                            <input id="pass" name="pass" type="password" class="form-control" placeholder="Password"  required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please enter your password</div>
                            </div>

                            <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember-me" name="remember">
                                <label class="custom-control-label" for="remember-me">Remember me</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                            <button type="submit" class="site-btn" name="dangky">ĐĂNG KÝ</button>
                                </div>
                              
                            </div> 
                           
                        </div>
                       
                        <div class="col-lg-4 col-md-6">
                            <img src="../../img/2.png" alt="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    

    <!-- Js Plugins -->
    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.nice-select.min.js"></script>
    <script src="../../js/jquery-ui.min.js"></script>
    <script src="../../js/jquery.slicknav.js"></script>
    <script src="../../js/mixitup.min.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/main.js"></script>

 

</body>

</html>