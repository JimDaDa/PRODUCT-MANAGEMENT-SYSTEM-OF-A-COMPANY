<?php
session_start();

include('../../admin/config/config.php');

//kiem tra neu dang nhap thi
// khong cho vao login.php nưa
if (isset($_SESSION['dangnhap'])) {
    // header('Location: ../../index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dolce far niente">
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
    <?php
       

       

         $error = '';
         if (isset($_POST['dangnhap'])) {
     $user = $_POST['user'];
        $password = $_POST['password'];
        
         $sql= "SELECT * FROM tbl_dangky WHERE email='".$user."' and matkhau='".$password."' limit 1";
         $row=mysqli_query($mysqli,$sql);
         $count=mysqli_num_rows($row);
    } else {
        $user = '';
        $password = '';
    }


    if (isset($_POST['user']) && isset($_POST['password'])) {
        $user = $_POST['user'];
        $password = $_POST['password'];

        if (empty($user)) {
            $error = 'Please enter your username';
        } else if (empty($password)) {
            $error = 'Please enter your password';
        } else if ($count > 0) {
            echo 'Login success';

            if (isset($_POST['remember'])) {
                //set cookie
                setcookie('user', $user, time() + 3600 * 24);
                setcookie('password', $password, time() + 3600 * 24);
            }

           
            $_SESSION['user'] = $user;
            $_SESSION['id_khachhang'] = $row_data['thutu'];
			header("Location:../../index1.php?quanly=giohang");
            // header('Location:../../index1.php');
            exit();
        } else {
            $error = 'Invalid username or password';
        }
    }
   




    ?>
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
                        <h2>Đăng nhập tài khoản</h2>
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
                <h4>Đăng nhập</h4>
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input value="<?= $user ?>" name="user" id="username" type="text" class="form-control" placeholder="Username">
                            </div>
                            
                            <div class="checkout__input">
                                <p>Mật khẩu<span>*</span></p>
                                <input value="<?= $password ?>" name="password" id="password" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Ghi nhớ đăng nhập
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <?php
                            if (!empty($error)) {
                                echo '<div class="alert alert-danger ">' . $error . '</div>';
                            }
                            ?>
                            <button type="submit" class="site-btn"name="dangnhap" >LOGIN</button>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <img src="../../img/1.png" alt="">
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