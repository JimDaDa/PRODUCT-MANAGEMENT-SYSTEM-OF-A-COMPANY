<?php 
include("../../config/config.php");
$email = $_POST['email'];
$thutu=$_POST['thutu'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];
$ten_sanpham = $_POST['ten_sanpham'];

if (isset($_POST['them'])) {
	# thêm
	$sql_add="INSERT INTO tbl_baiviet(thutu,email,rating,comment,ten_sanpham) value('".$thutu."','".$email."','".$rating."','".$comment."','".$ten_sanpham."')";
	mysqli_query($mysqli,$sql_add);
	header('Location:../../index.php?action=quanlibaiviet&query=them');


// }elseif (isset($_POST['suadanhmuc'])) {
// //sửa
// $sql_sua="UPDATE tbl_danhmuc SET ten_danhmuc='".$tenloaisanpham."' ,thutu='".$thutu."'  WHERE thutu='$_GET[thutu]'";
// 	mysqli_query($mysqli,$sql_sua);
// 	 header('Location:../../index.php?action=quanlydanhmuc&query=them');
	
// }else {
// 	//xóa
// 	// $id=$_GET['id_danhmuc'];
// 	$thutu1=$_GET['thutu'];
// 	$sql_xoa="DELETE FROM tbl_danhmuc WHERE thutu='".$thutu1."'";

	
// 	mysqli_query($mysqli,$sql_xoa);
// 	header('Location:../../index.php?action=quanlydanhmuc&query=them');
} 
 ?>
