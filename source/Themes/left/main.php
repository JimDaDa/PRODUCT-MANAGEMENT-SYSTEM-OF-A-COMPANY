
<?php 
$id = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}

//lấy danh mục của sản phẩm ở bảng sản phẩm 
$sql_pro ="SELECT * FROM tbl_sanpham WHERE  tbl_sanpham.danhmuc =".$id."  ORDER BY thutu  asc ";

$query_pro=mysqli_query($mysqli,$sql_pro);

// lấy số thứ tự từ bảng danh mục 
$sql_cate="SELECT * FROM tbl_danhmuc WHERE  tbl_danhmuc.thutu =".$id."  limit 1";
$query_cate=mysqli_query($mysqli,$sql_cate);
 $row_title=mysqli_fetch_array($query_cate);
   // print_r($row_title);



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
while ($row_pro=mysqli_fetch_array($query_pro)) {
    # code...


 ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
					<div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/<?php  echo $row_pro['hinhanh'];?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a name="themgiohang" href="index1.php?quanly=themgiohang&thutu=<?php echo $row_pro['ma_sanpham'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
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

            </div>
        </div>
    </section>
    <!-- Featured Section End -->