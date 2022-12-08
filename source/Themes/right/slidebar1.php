<!-- Categories Section Begin -->
<section class="categories">
        <div class="container">
            <div class="row">



       
                <div class="categories__slider owl-carousel">
                <?php 
$sql_danhmuc ="SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
$query_danhmuc =mysqli_query($mysqli,$sql_danhmuc);


while ($row=mysqli_fetch_array($query_danhmuc)) {

 ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/<?php echo $row['hinhanh_dm'] ?>">
                            <h5><a href="index1.php?quanly=danhmucsanpham&id=<?php echo $row['thutu'] ?>"><?php echo $row['ten_danhmuc'] ?></a></h5>
                           
                        </div>
                    </div>
                    <?php 
        } 
        ?>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->