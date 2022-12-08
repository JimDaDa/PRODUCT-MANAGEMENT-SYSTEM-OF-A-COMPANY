<?php 
include("../../config/config.php");
$ten_nhaphattrien = $_POST['ten_nhaphattrien'];
$thutu=$_POST['thutu'];
if (isset($_POST['themnhaphattrien'])) {
	# thêm
	$sql_add="INSERT INTO tbl_nhaphattrien(ten_nhaphattrien,thutu) value('".$ten_nhaphattrien."','".$thutu."')";
	mysqli_query($mysqli,$sql_add);
	header('Location:../../index.php?action=nhaphattrien&query=them');


}elseif (isset($_POST['suanhaphattrien'])) {
//sửa
$sql_sua="UPDATE tbl_nhaphattrien SET ten_nhaphattrien='".$ten_nhaphattrien."' ,thutu='".$thutu."'  WHERE thutu='$_GET[thutu]'";
	mysqli_query($mysqli,$sql_sua);
	 header('Location:../../index.php?action=nhaphattrien&query=them');
	
}else {
	//xóa
	// $id=$_GET['id_danhmuc'];
	$thutu1=$_GET['thutu'];
	$sql_xoa="DELETE FROM tbl_nhaphattrien WHERE thutu='".$thutu1."'";

	
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=nhaphattrien&query=them');
} 
 ?>
