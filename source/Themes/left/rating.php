<?php 

session_start();
include('../../admin/config/config.php');
$tensanpham=$_SESSION['ten_sanpham'];
$rating=$_SESSION['rating'];

$sql_rating="SELECT * FROM tbl_baiviet where ten_sanpham='".$ten_sanpham."'";
echo $sql_rating;

 ?>
