
<?php 
$id = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
if (isset($_GET['trang'])) {
  $trang1=$_GET['trang'];

  # code...
}else{
  $trang1=1;
} if ($trang1=='' || $trang1==1) {
  $b=0;
  # code...
}else{
  $b=($trang1*6)-6;
}

 

?>
 

 <?php 
$id = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
//lấy danh mục của sản phẩm ở bảng sản phẩm 
$sql_pro ="SELECT * FROM tbl_sanpham WHERE  tbl_sanpham.nhaphattrien =".$id."  ORDER BY thutu asc limit $b,6";

$query_pro=mysqli_query($mysqli,$sql_pro);




 ?>

<!-- Featured Section Begin -->
<section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">





                      
                    </div>
                </div>
            </div>
            <div class="row featured__filter">




              <?php 
while ($row_pro=mysqli_fetch_array($query_pro)) {
    # code...


 ?>
 <?php 

$danhmuc=$row_pro['danhmuc'];
$sql="SELECT ten_danhmuc FROM tbl_danhmuc,tbl_sanpham where tbl_danhmuc.thutu='".$danhmuc."'";
$query_dm=mysqli_query($mysqli,$sql);
$row_dm=mysqli_fetch_array($query_dm);




  ?>

                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/<?php  echo $row_pro['hinhanh'];?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="index1.php?quanly=giohang"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="Themes/left/files/chitiet.php?quanly=sanpham&id=<?php echo $row_pro['thutu']?>"><?php  echo $row_pro['ten_sanpham'];?></a></h6>
                            <h5><?php  echo number_format($row_pro['gia_sanpham'],0,',','.').'vnd' ?></h5>
                        </div>
                    </div>
                </div>
                <?php 
                } 
                ?>

<!-- ----- -->
<!-- <?php 

$sql_npt="SELECT * FROM tbl_nhaphattrien,tbl_sanpham where tbl_nhaphattrien.thutu=tbl_sanpham.nhaphattrien";
$query_npt=mysqli_query($mysqli,$sql_npt);
$row_npt=mysqli_fetch_array($query_npt);
$sql_trang=mysqli_query($mysqli,"SELECT * FROM tbl_sanpham ");

     $row_trang= mysqli_num_rows($sql_trang);
 $trang=ceil($row_trang /20) ;

 ?>
 <div class="trang">
<ul >
  <?php 

      for ($i=1; $i < $trang; $i++) { 
        # code...
      

   ?>
  <li class="sotrang" <?php if ($i==$trang1){
    echo "style='background:rgb(152 152 188);'";

  } {
    # code...
  } ?>>
    <a href="index.php?quanly=nhaphattrien&trang=<?php echo $i ?>&id=<?php echo $row_npt['thutu'] ?>"><?php echo $i ?></a>
  </li>
  

  <?php 
} 

?> -->
</ul>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->