<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dolce far niente</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../../../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../../../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../../../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../../../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../../../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../../../css/style.css" type="text/css">
</head>

<body>
    
  <?php 
  session_start();

  
  include('../../../admin/config/config.php'); 
  

 
  ?>
  <?php 
if (isset($_POST['dangxuat'])) {
  unset($_SESSION['dangnhap']);

  # code...
}
if (isset($_SESSION['user']) == false) {
   // header('Location: Themes/left/login.php');
   // exit();
}
else{
$root = $_SESSION['user'];

}

  ?>

  <?php 

$sql_danhmuc ="SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
$query_danhmuc =mysqli_query($mysqli,$sql_danhmuc);

 ?>

<?php 


 ?>



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
                        <a href="../../../index1.php"><img src="../../../img/logo9.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="../../../index1.php">Trang chủ</a></li>
                            <li><a href="#">Hãng Sản Xuất</a>
                            <?php 
                                    $sql_danhmuc ="SELECT * FROM tbl_nhaphattrien ORDER BY thutu ASC";
                                    $query_danhmuc =mysqli_query($mysqli,$sql_danhmuc);
                                    ?>

                                <ul class="header__menu__dropdown">
                                <?php

while ($row=mysqli_fetch_array($query_danhmuc)) {

?>
                                    <li><a href="../../../index1.php?quanly=nhaphattrien&id=<?php echo $row['thutu'] ?>"><?php echo $row['ten_nhaphattrien'] ?></a></li>
                                    <?php 
                                                } 
                                                ?>
                                </ul>
                            </li>
                            <li><a href="#">Tài khoản</a>
                                <ul class="header__menu__dropdown">
                                <li><a href="../../../admin/login.php">Admin</a></li>
                                    <li><a href="../dangky.php">Đăng ký</a></li>
                                    <li><a href="Themes/left/changeinfo.php">Đổi mật khẩu</a></li>
                                    <li><a href="Themes/left/changeinfo.php">Đổi thông tin cá nhân</a></li>
                                    <li><a href="../../../index1.php?quanly=giohang">Giỏ hàng</a></li>
                                    <li><a href="../../../index1.php?quanly=lichsudonhang">Lịch sử đơn hàng</a></li>
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

                            <li><a href="../login1.php">Đăng nhập</a></li>
                            
                            <?php 
                                }
                                else
                                {
                            ?>
                                    <li><a href="../logout.php" name="dangxuat">ĐĂNG XUẤT</a></li>

                                <?php 
                                } 
                                ?>
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
                            <li><a href="../../../index1.php?quanly=danhmuc&id=<?php echo $row['thutu'] ?>"><?php echo $row['ten_danhmuc'] ?></a></li>
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
                                <h5>345678910JQK</h5>
                                <span>Luôn hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
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



    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                <?php 
$id = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}

$sql_chitiet ="SELECT * FROM tbl_sanpham,tbl_danhmuc,tbl_nhaphattrien WHERE  tbl_sanpham.danhmuc =tbl_danhmuc.thutu AND tbl_sanpham.thutu='".$id."' and tbl_sanpham.nhaphattrien=tbl_nhaphattrien.thutu limit 1 ";
$query_chitiet=mysqli_query($mysqli,$sql_chitiet);
while ($row_chitiet=mysqli_fetch_array($query_chitiet)) {
    
 ?>

                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src='../../../images/<?php  echo $row_chitiet['hinhanh'];?>' alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl='../../../images/<?php  echo $row_chitiet['hinh_1'];?>'
                                src='../../../images/<?php  echo $row_chitiet['hinh_1'];?>' alt="">
                            <img data-imgbigurl='../../../images/<?php  echo $row_chitiet['hinh_2'];?>'
                                src='../../../images/<?php  echo $row_chitiet['hinh_2'];?>' alt="">
                            <img data-imgbigurl='../../../images/<?php  echo $row_chitiet['hinh_2'];?>'
                                src='../../../images/<?php  echo $row_chitiet['hinh_3'];?>' alt="">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                    
                        <h3 name="ten_sanpham"><?php echo $row_chitiet['ten_sanpham'] ?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price"><?php  echo number_format($row_chitiet['gia_sanpham'],0,',','.').'vnd' ?></div>
                        <p>
                        <?php 
                         
                         echo $row_chitiet['thongtin']  ;
 
                      
                         
                         ?>
                        </p>
                        <div class="product__details__quantity">
                           
                        </div>
                        <form method="POST" action="../../../index1.php?quanly=themgiohang&thutu=<?php echo $row_chitiet['ma_sanpham'] ?>">
                        <p>  <input class="primary-btn" name="themgiohang" type="submit" value="Thêm giỏ hàng">   <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a></p> 
                            <!-- <a href="#" class="primary-btn">ADD TO CARD</a> -->
                           
                      
                        <ul>
                            <li><b>Danh mục</b> <span><?php echo $row_chitiet['ten_danhmuc'] ?></span></li>
                            <li><b>Phiên bản  </b> <span> <samp><?php echo $row_chitiet['ma_sanpham'] ?></samp></span></li>
                            <li><b>Nhà sản xuất </b> <span> <a href="../../../index1.php?quanly=nhaphattrien&id=<?php echo $row_chitiet['thutu'] ?>">
                   
                   <?php echo $row_chitiet['ten_nhaphattrien'] ?>
                </a></span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                        </form>


                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Mô tả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Thông tin</a>
                                   
   
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Bình luận <span>(1)</span></a>
                            </li>
                        </ul>
                        
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Mô tả</h6>
                                    <p>
                                    <?php 
                         
                         echo $row_chitiet['mota']  ;
 
                      
                         
                         ?>
                                    </p>
                                </div>
                            </div>
                            
                            <div class="tab-pane active" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Thông tin</h6>
                                    <p>
                                    <?php 
                         
                         echo $row_chitiet['thongtin']  ;
 
                      
                         
                         ?>
                                    </p>
                                </div>
                            </div>

                            <div class="tab-pane active" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Bình luận</h6>
                                    <p>
                                    <?php
 
 
 include('../../../admin/config/config.php');
 
 
 
  ?>
 
 <?php 
  $ten_sanpham=$row_chitiet['ten_sanpham'] ;
  if (isset($_SESSION['user']) == true) {
 
 
 
 $sql_check="SELECT * from tbl_giohang where ten_khachhang='".$root."' and tbl_giohang.id_giohang='".$id."'";
 
 $query_check=mysqli_query($mysqli,$sql_check);
 
 $count_check=mysqli_num_rows($query_check);
 
 
 
  } 
  // else{
  //   echo "<script >window.location='../login.php';</script>";
 
  // }
  ?>
 <?php 
 ?>                    
<!-- Bình luận  -->
<?php
 
 // 
 include('../../../admin/config/config.php');
 
 if (isset($_POST['them']) && isset($root)) {
   # code...
   
   
   $rating=$_POST['star'];
   $comment=$_POST['comment'];
   $ten_sanpham=$row_chitiet['ten_sanpham'] ;
  
   $sql_cmt=mysqli_query($mysqli,"INSERT INTO tbl_baiviet(email,rating,comment,ten_sanpham) values ('$root','$rating','$comment','$ten_sanpham')") or die(mysqli_error($mysqli));
 
 
   if ($sql_cmt) {
     echo '<p style="color:green">Bạn đã gửi bình luận thành công</p>';
   
   
  }
 
 }elseif (isset($_POST['them']) && !isset($root)) {
    echo '<p style="color:red">Vui lòng đăng nhập</p>';
   # code...
 }
 
 
 
  ?>
 
 
 <div class="khungcmt">
   
 
   <div class="ndcmt">
 
 
       <form id="cmt-form" action="" method="POST" >
 
 
 
     <div class="rate">
        
         <div class="container d-flex justify-content-center mt-200">
           
             <div class="row">
               <div class="col-md-12">
                 <div class="stars">
                   
                     <input class="star star-5" id="star-5" type="radio" name="star" value="5">
                     <label class="star star-5" for="star-5"></label>
 
                      <input class="star star-4" id="star-4" type="radio" name="star" value="4">
                     <label class="star star-4" for="star-4"></label>
 
                      <input class="star star-3" id="star-3" type="radio" name="star" value="3">
                     <label class="star star-3" for="star-3"></label>
 
                      <input class="star star-2" id="star-2" type="radio" name="star" value="2">
                     <label class="star star-2" for="star-2"></label>
 
                      <input class="star star-1" id="star-1" type="radio" name="star"value="1">
                     <label class="star star-1" for="star-1"></label>
 
 
                        
                     
                  
                 </div>
               </div>
 
             </div>
         </div>
       </div>
 

     
   
       <input id="nd" contenteditable="true" class="form-control" name='comment'>
        <div class="download1">
         <button type="submit" class="down1" name="them" id="them"> Đăng</button>
     
      
       
 </div>
     
    
 
 </form>
 
 </div>
 
 
    
 
    
 </div>
                                    <?php 



$sql_binhluan ="SELECT * from tbl_baiviet where ten_sanpham='".$ten_sanpham."'";
$query_binhluan =mysqli_query($mysqli,$sql_binhluan);

                     
                      
                     
                      while ($row_binhluan=mysqli_fetch_array($query_binhluan)) {
                   ?>



<div class="khungcmt collapse multi-collapse" id="multiCollapse">
  <ul class="binhluan  ">

    <li class="nguoibinhluan1 ">
      <div class="cmt ">

        <div class="cmt-top">
          <div class="hinhcmt noidungcmt">
            <img class="card-img-top" src='../../../images/id.png' style="width:5%">


          </div>

          <div class="thongtin">
            <span class="ten1 ten">
               <?php echo $row_binhluan['email']; ?>
            </span>
            

          </div>
          <div class="noidung">
             <span class="ten1"><?php  echo $row_binhluan['comment']; ?></span>
            
          </div>
          <div class="noidung">
             
           

             <?php 
                  if ($row_binhluan['rating'] ==5) {


              ?>
               <div class="rating">
              <div class="stars5">


    
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star" ></i>

              </div>
  
          </div>

      <?php 

} elseif ($row_binhluan['rating'] ==4) {
  # code...


       ?>

<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star checked4" ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>


     <?php 


   }elseif ($row_binhluan['rating'] ==3) {




      ?>


<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star checked4" ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>

<?php 

}elseif ($row_binhluan['rating'] ==2) {

 ?>


 <div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>


 <?php 

}elseif ($row_binhluan['rating'] ==1) {

  ?>

<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>

  <?php 
}else{

   ?>


<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star  " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>


   <?php 

}
    ?>



          </div>

        </div>
        

      </div>

    </li>
    


  </ul>





</div>


<?php 
        } 
        
        ?>

        <?php 

          if ($sql_binhluan > 6) {
            # code...
          

         ?>
         <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapse" role="button" aria-expanded="false" aria-controls="multiCollapse">Xem Thêm</a>


         <?php 
          }

          ?>

          <div class="clear"></div>
            <div class="describe-line"></div>

          <?php 



$sql_rating="SELECT AVG(rating),ten_sanpham FROM tbl_baiviet where ten_sanpham='".$ten_sanpham."'";
$query_rating=mysqli_query($mysqli,$sql_rating);
$row_rating=mysqli_fetch_array($query_rating);
$rating_tb=$row_rating['0']; // rating trung bình của app 

 $setrating=mysqli_query($mysqli,"UPDATE tbl_thongke set rating_tb='".$rating_tb."'  where ten_sanpham='".$ten_sanpham."'");





 ?>
 <div class="review">
  <div class="rating1">
    <div class="rating2"><?php echo $rating_tb ?></div>
    <div class="rating3">Tổng điểm đánh giá </div>
    


  </div>
  <div class="rating4">
     <?php 

                  if ($rating_tb > 4 && $rating_tb <= 5 ) {


              ?>
               <div class="rating">
              <div class="stars5">


    
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star" ></i>

              </div>
  
          </div>

      <?php 

} elseif ($rating_tb > 3 && $rating_tb <= 4) {
  # code...


       ?>

<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star checked4" ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>


     <?php 


   }elseif ($rating_tb > 2 && $rating_tb <=3) {




      ?>


<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star checked4" ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>

<?php 

}elseif ($rating_tb > 1 && $rating_tb <= 2) {

 ?>


 <div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>


 <?php 

}elseif ($rating_tb <=1) {

  ?>

<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>

  <?php 
}else{

   ?>


<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star  " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>


   <?php 

}
    ?>



  </div>
     
 </div>



          
</div>





<div class="clear:left"></div>







<?php 

}

 ?>

                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->


<!-- Featured Section Begin -->

            

                
<?php 
$id = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}

$sql_chitiet ="SELECT * FROM tbl_sanpham,tbl_danhmuc,tbl_nhaphattrien WHERE  tbl_sanpham.danhmuc =tbl_danhmuc.thutu AND tbl_sanpham.thutu='".$id."' and tbl_sanpham.nhaphattrien=tbl_nhaphattrien.thutu limit 1 ";
$query_chitiet=mysqli_query($mysqli,$sql_chitiet);
while ($row_chitiet=mysqli_fetch_array($query_chitiet)) {

//    include('../../../admin/config/config.php');

//lấy danh mục của sản phẩm ở bảng sản phẩm
$danhmuc =$row_chitiet['ten_danhmuc'];

$theloai=$row_chitiet['danhmuc']; 
                    
$ten_sanpham=$row_chitiet['ten_sanpham'];
                     

                    
                      $sql_theloai ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE  tbl_sanpham.danhmuc =tbl_danhmuc.thutu AND tbl_danhmuc.ten_danhmuc='".$row_chitiet['ten_danhmuc']."'   and ten_sanpham != '".$ten_sanpham."'  limit 4";
                      $query_theloai=mysqli_query($mysqli,$sql_theloai);
}
?>

<!-- Featured Section Begin -->
<section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản Phẩm Liên Quan</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                 <?php 
while ($row_theloai=mysqli_fetch_array($query_theloai)) {
    # code...
 
    

 ?>                   
             
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../../../images/<?php  echo $row_theloai['hinhanh'];?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a name="themgiohang" href="../../../index1.php?quanly=themgiohang&thutu=<?php echo $row_theloai['ma_sanpham'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="chitiet.php?quanly=sanpham&id=<?php echo $row_theloai['ma_sanpham']?>"><?php  echo $row_theloai['ten_sanpham'];?></a></h6>
                            <h5><?php  echo number_format($row_theloai['gia_sanpham'],0,',','.').'vnd' ?></h5>
                        </div>
                    </div>
                </div>
                <?php 
                } 
                ?>

<!-- ----- -->

            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

    <!-- Footer Section Begin -->
<footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index1"><img src="../../../img/logo9.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Địa chỉ: Quận 7, TP.HCM</li>
                            <li>Phone: 1900 1234</li>
                            <li>Email: dolcefarniente@dfn.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Tham gia nhận các khuyến mãi</h6>
                        <p>Nhập email của bạn để nhận những món quà của cửa hàng</p>
                        <form action="#">
                            <input type="text" placeholder="Nhập email">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../../../js/jquery-3.3.1.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../../../js/jquery.nice-select.min.js"></script>
    <script src="../../../js/jquery-ui.min.js"></script>
    <script src="../../../js/jquery.slicknav.js"></script>
    <script src="../../../js/mixitup.min.js"></script>
    <script src="../../../js/owl.carousel.min.js"></script>
    <script src="../../../js/main.js"></script>


</body>

</html>
<style>
ul{
    list-style: none;
}
    /* img.card-img-top{
        width: 10%;
    } */
div#describe {
    width: 100%;
    height: auto;
}

/* nút post */
.download1{
    overflow: hidden;
}
.download1 .down1{
    display: inline-block;
    padding: 4px 38px 8px 28px;
    height: 35px;
    color: #fff;
    text-align: center;
    font-size: 17px;
  
    background-color:rgb(152 152 188);
    margin: 10px ;
    border-radius: 8px;
}
a.down1 {
    float: right;
}
    /* rating   -----------------------------------------------------*/
    .ten{
                /* margin-top: 8px; */
    font-weight: bold;
    display: block;
    /* padding-bottom: 5px; */
    font-size: 15px;
    color: teal;

   


}
    .rating .stars{
    width: 270px;
    display: inline-block;
    padding: 2px 100px 13px 0px;
color: #d39e00;

}
.rating .stars a{
    float: right;
    font-size: 18px;
    box-sizing: border-box;
    padding-left: 5px;
  /*  color: #d39e00;*/

}
.rating .stars a.one-star {
    padding-left: 0px;
}

.star{
    display: block;
    width: 24px;
    height: 24px;
    cursor: pointer;
}
.rating .star i:hover{
   
   color: #d39e00;
}
    span.g1 {
    display: block;
    padding: 5px 5px 0 0;
    font-size: 21px;
    color: #999999;
}
    .khung {
    text-align: center;
    padding: 12px 20px;
    line-height: 20px;
   background-image: linear-gradient(to left ,#b5ddd1,rgb(93 151 175),#c3e4fd);
    
}
div.khungcmt ul.binhluan{
    display: block;
}

.khungcmt{
    padding: 15px;
}
#nd {
    /*word-break: break-all;*/
    min-height: 100px;
    font-size: 16px;
    background-image: linear-gradient(to left ,#fdfdff,rgb(236 238 255),#d6e6f3);
    border: 2px solid #5295a7;
    
    border-radius: 10px;
   
    padding: 7px;
   
    width: 100%;
    box-sizing: border-box;
}

input.star {
    display: none
}

label.star {
    float: right;
    padding: 25px;
    font-size: 36px;
    color: #5295a7;
    transition: all .2s
}

input.star:checked~label.star:before {
    content: '\f005';
    color: #FD4;
    transition: all .25s
}



label.star:hover {
    transform: rotate(10deg) scale(1.3)
}

label.star:before {
    content: '\f006';
    font-family: FontAwesome
}

::-webkit-scrollbar {
    width: 0px;
   
} 

.nguoibinhluan {
    border-bottom: 1px solid #eee;
}
.cmt{
    padding: 15px 15px 10px;
}



.thongtin {
    /* margin-right: 55px; */
    padding: 0px 0px 20px 0px;
}
span.ten1  {
    /* margin-left: 35px; */
    display:inline-block; 

}
span.ten {

    font-weight: bold;
}

/*span.noidung1 {
    display: inline-block;
   padding: 0px 0px 5px 0px;

}*/
.noidung1{
    padding: 0px 0px 20px 0px;
}



.slidebar{
    width: 400px;
    height: 310px;

    overflow: scroll;
}
  .slidebar1 h3{
    

   background-color: #84b4c8;
   height: 50px;
    margin-top: 0;
    text-align: center;
    font-size: 20px;
    line-height: 40px;
  
    text-indent: 30px;
    color: #150f0f;
    border-top-left-radius: 40px;
    border-top-right-radius: 40px;


}

.checked{

      color: yellow;
}

.rating .stars5{
    width: 270px;
    display: inline-block;
    /* padding: 2px 100px 13px 31px; */
color: #d39e00;

}
.rating .stars4{
    width: 270px;
    display: inline-block;
    /* padding: 2px 100px 13px 31px; */


}

.rating .checked4{
    
  
color: #d39e00;

}
.review{
    padding: 25 25 0 0;
}
.rating1{
    display: inline-block;
    text-align: center;
    width: 40%;
    border-right: 1px solid #fff;
}
.rating2{
    font-size: 60px;
    line-height: 60px;
}
.rating3{
    text-align: center;
    margin-left: 15px;
}
.rating4{
    box-sizing: border-box;
    display: inline-block;
    width: 50%;
    padding: 2px 51px 23px 70px;
    font-size: 24px;
    text-align: center;
  padding: 20px 20px 20px 45px;

}
.box .title .more {
    position: absolute;
   
    right: 8px;
    top: 15px;
    height: 20px;
    line-height: 20px;
    text-align: right;
}
.btn-primary {
    color: #fff;
    background-color: #c7ced7;
    border-color: #bac0c7;
    
}
.btn:hover {
    color: #212529;
    text-decoration: none;
}
.btn-primary.focus, .btn-primary:focus {
    color: #fff;
    background-color: #445e78;
    border-color: #0e1c2c;
    
}
</style>