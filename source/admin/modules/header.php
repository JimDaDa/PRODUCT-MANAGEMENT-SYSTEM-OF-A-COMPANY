
<?php 
if (isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
	unset($_SESSION['dangnhap']);
	header('Location: login.php');
}
 ?>



<div id="header">
  <nav class="navbar navbar-expand-md navbar-light  sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Admin
    <!-- <img src="images/gg.png" width="45px"> -->

  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
      data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
         <a href="index.php">Back</a>
        </li>
        <li class="nav-item">
          <a href="../index1.php">Trang Chủ</a>
        </li>
         <li class="nav-item">
         <a href="index.php?action=quanlydanhmuc&query=them">Quản lý danh mục sản phẩm </a>
        </li>
         <li class="nav-item">
          <a href="index.php?action=quanlysanpham&query=them">Quản lý  sản phẩm </a>
        </li>
         <li class="nav-item">
        <a href="index.php?action=nhaphattrien&query=them">Quản lý  nhà sản xuất</a>
        </li>
        <li class="nav-item">
        <a href="index.php?action=quanlybaiviet&query=them">Quản lý bài viết </a>
        </li>
       
         <li class="nav-item">
        <a href="index.php?action=quanlidonhang&query=them">Quản lý đơn hàng</a>
        </li>
       <li class="nav-item">
        <a href="index.php?dangxuat=1">Đăng Xuất: <?php if (isset($_SESSION['dangnhap'])){
    	echo $_SESSION['dangnhap'];
 
    	# code...
    } ?> </a>
        </li>
        
       
      </ul>
    </div>
  </div>
</nav>


 
</div>






