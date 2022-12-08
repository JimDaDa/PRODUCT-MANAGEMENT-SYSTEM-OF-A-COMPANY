<?php 
    if (isset($_POST['dangxuat'])) 
    {
        unset($_SESSION['dangnhap']);
        # code...
    }
    if (isset($_SESSION['user']) == false) 
    {
        // header('Location:index.php');
        // exit();
    }
    else
    {
        $root = $_SESSION['user'];
        // $email=$_POST['email'];
    }
 ?>

<!-- Header Section Begin -->
<header class="header">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    
                    <div class="header__logo">
                        <a href="index1.php"><img class="cangiua" src="img/logo9.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <nav class="header__menu">
                  
                        <ul>
                        
                            <li class="active"><a href="./index1.php">Trang chủ</a></li>
                            <li><a href="./index1.php">Hãng Sản Xuất</a>
                                    <?php 
                                    $sql_danhmuc ="SELECT * FROM tbl_nhaphattrien ORDER BY thutu ASC";
                                    $query_danhmuc =mysqli_query($mysqli,$sql_danhmuc);
                                    ?>

                                <ul class="header__menu__dropdown">
                                <?php

                                while ($row=mysqli_fetch_array($query_danhmuc)) {

                                ?>
                                <li><a href="index1.php?quanly=nhaphattrien&id=<?php echo $row['thutu'] ?>"><?php echo $row['ten_nhaphattrien'] ?></a></li>
                               
                                                <?php 
                                                } 
                                                ?>
                                </ul>
                               
                            </li>
                            <li><a href="#">Tài khoản</a>
                                <ul class="header__menu__dropdown">
                              
                                <li><a href="admin/login.php">Admin</a></li>

                                    <li><a href="Themes/left/signup.php">Đăng ký</a></li>
                                    <li><a href="Themes/left/changeinfo.php">Đổi mật khẩu</a></li>
                                    <li><a href="Themes/left/changeinfo.php">Đổi thông tin cá nhân</a></li>
                                    <li><a href="index1.php?quanly=giohang">Giỏ hàng</a></li>
                                    <li><a href="index1.php?quanly=donhangdadat">Lịch sử đơn hàng</a></li>
                                </ul>
                            </li>

                             <?php
                                if (isset($_SESSION['user']) == true) 
                                {
                                    echo $root;
                                }
                                else
                                {
                                    echo " ";
                                }
                             ?>
  
                            <?php 
                                if (!isset($_SESSION['dangnhap']) && !isset($_SESSION['user'])) 
                                {
                                    # code..

                            ?> 

                            <li><a href="Themes/left/login1.php">Đăng nhập</a></li>
                                <ul class="header__menu__dropdown">
                            <?php 
                                }
                                else
                                {
                            ?>
                                
                               
                                    <li><a href="Themes/left/logout.php" name="dangxuat">ĐĂNG XUẤT</a></li>
                                        
                                </ul> 
                                <?php 
                                } 
                                ?>
                                
                            </li>
                           
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

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh mục nổi bật</span>
                        </div>
                        <ul>
                        <?php 
                            $sql_danhmuc ="SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
                            $query_danhmuc =mysqli_query($mysqli,$sql_danhmuc);

                            while ($row=mysqli_fetch_array($query_danhmuc)) 
                            {

                        ?>
                            <li><a href="index1.php?quanly=danhmuc&id=<?php echo $row['thutu'] ?>"><?php echo $row['ten_danhmuc'] ?></a></li>
                            <?php 
        } 
        ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="index1.php?tongthe=search" method="POST">
                                <input type="text" placeholder="Tìm kiếm sản phẩm">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>1900 1234</h5>
                                <span>Luôn hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                    


              


                    <div class="hero__item set-bg" data-setbg="img/banner/2.png"> 
                        
                        <div class="hero__text">
                            <!-- <span>ĐIỆN THOẠI, LAPTOP, MÁY TÍNH</span>
                            <h2>SALE <br />10%</h2> -->
                            <!-- <a href="#" class="primary-btn">MUA NGAY</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


     