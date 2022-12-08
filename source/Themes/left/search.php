

<?php 


if (isset($_POST['search'])) {
	$tukhoa=$_POST['tukhoa'];

	# code...
}


$sql_pro ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE  tbl_sanpham.danhmuc =tbl_danhmuc.thutu  and tbl_sanpham.ten_sanpham like '%".$tukhoa."%'  ";


$query_pro=mysqli_query($mysqli,$sql_pro);



 ?>



 <h4 class="title"><?php echo $_POST['tukhoa'] ?></h4>


 <div class="sbody"> 


<div class="box">








<div class="container">

<div class="row">
   
    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-12">

      
    


             <ul  class= "top-list sublist" >
<?php 
while ($row_pro=mysqli_fetch_array($query_pro)) {
    # code...
    // print_r($row_pro);


 ?>

            <li class="w1">
                <a href="Themes/left/files/sanpham.php?quanly=sanpham&id=<?php echo $row_pro['0']?>">
                <img src='images/<?php  echo $row_pro['hinhanh'];?>'>
                <div class='user-info'>
                    <span class='ten'><?php  echo $row_pro['ten_sanpham'];?></span>
                    <span class='position'><?php  echo $row_pro['ten_danhmuc']; ?> </span>
                       <span class='position'><?php  echo number_format($row_pro['gia_sanpham'],0,',','.').'vnd' ?> </span>
                      </a>

        </li>
        <?php 
        } 
        ?>

           
           
</ul>

</div>


</div>
</div>
</div>
</div>

<div class="clear"></div>

