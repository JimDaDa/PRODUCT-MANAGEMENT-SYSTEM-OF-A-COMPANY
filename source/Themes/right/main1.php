
<?php 
    if (isset($_SESSION['dangky'])) 
    {
        echo '<span>'. $_SESSION['dangky'] .'</span>';
        # code...
    }
?>
<?php 
// $id = 0;
// if(isset($_GET['id']))
// {
//     $id = $_GET['id'];
// }
// if (isset($_GET['trang'])) {
//   $trang1=$_GET['trang'];

//   # code...
// }else{
//   $trang1=1;
// } if ($trang1=='' || $trang1==1) {
//   $b=0;
//   # code...
// }else{
//   $b=($trang1*6)-6;
// }

 


 

 ?>
<?php 
    $sql_3 ="SELECT * FROM tbl_sanpham limit 30  ";
    $query_3=mysqli_query($mysqli,$sql_3);
    // print_r($row_3);
    // print_r($query_3);
?>

<!-- Featured Section Begin -->
<section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản Phẩm Nổi Bật</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php 
                    while ($row_3=mysqli_fetch_array($query_3) ) 
                    {
                        
                ?>
                <?php 
                $danhmuc=$row_3['danhmuc'];
                $sql="SELECT ten_danhmuc FROM tbl_danhmuc,tbl_sanpham where tbl_danhmuc.thutu='".$danhmuc."'";
                $query_dm=mysqli_query($mysqli,$sql);
                $row_dm=mysqli_fetch_array($query_dm);
                ?>

                <?php 
                $npt=$row_3['nhaphattrien'];
                $sql_npt="SELECT ten_nhaphattrien FROM tbl_nhaphattrien,tbl_sanpham where tbl_nhaphattrien.thutu='".$npt."'";
                $query_npt=mysqli_query($mysqli,$sql_npt);
                $row_npt=mysqli_fetch_array($query_npt);
                // print_r($row_3['nhaphattrien']);
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
					<div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/<?php  echo $row_3['hinhanh'];?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a name="themgiohang" href="index1.php?quanly=themgiohang&thutu=<?php echo $row_3['ma_sanpham'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="Themes/left/files/chitiet.php?quanly=sanpham&id=<?php echo $row_3['thutu']?>"><?php  echo $row_3['ten_sanpham'];?></a></h6>
                            <h5><?php  echo number_format($row_3['gia_sanpham'],0,',','.').'vnd' ?></h5>
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
    <!-- Featured Section End -->