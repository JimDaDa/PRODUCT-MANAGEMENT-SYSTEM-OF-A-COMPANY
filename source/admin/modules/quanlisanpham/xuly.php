<?php 
session_start();
include("../../config/config.php");

$thutu=$_POST['thutu'];
$tensanpham = $_POST['ten_sanpham'];
$ma_sp=$_POST['ma_sanpham'];
$gia_sp=$_POST['gia_sanpham'];

$mota=$_POST['mota'];
$thongtin=$_POST['thongtin'];

//icon
$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
$hinhanh=time().'_'.$hinhanh;

//hình ảnh 1 
$hinhanh1=$_FILES['hinh_1']['name'];
$hinhanh1_tmp=$_FILES['hinh_1']['tmp_name'];
$hinhanh1=time().'_'.$hinhanh1;
// hình ảnh 2 
$hinhanh2=$_FILES['hinh_2']['name'];
$hinhanh2_tmp=$_FILES['hinh_2']['tmp_name'];
$hinhanh2=time().'_'.$hinhanh2;
//hình ảnh 3
$hinhanh3=$_FILES['hinh_3']['name'];
$hinhanh3_tmp=$_FILES['hinh_3']['tmp_name'];
$hinhanh3=time().'_'.$hinhanh3;
$danhmuc=$_POST['danhmuc'];
$nhaphattrien=$_POST['nhaphattrien'];




if (isset($_POST['themsanpham'])) {
	# thêm
	$sql_add="INSERT INTO tbl_sanpham(thutu,ten_sanpham,ma_sanpham,gia_sanpham,hinhanh,hinh_1,hinh_2,hinh_3,mota,thongtin,danhmuc,nhaphattrien) value('".$thutu."','".$tensanpham."','".$ma_sp."','".$gia_sp."','".$hinhanh."','".$hinhanh1."','".$hinhanh2."','".$hinhanh3."','".$mota."','".$thongtin."','".$danhmuc."','".$nhaphattrien."')";
	mysqli_query($mysqli,$sql_add);
	header('Location:../../index.php?action=quanlysanpham&query=them');

	move_uploaded_file($hinhanh_tmp, '../../../images/'.$hinhanh);
	move_uploaded_file($hinhanh1_tmp, '../../../images/'.$hinhanh1);
	move_uploaded_file($hinhanh2_tmp, '../../../images/'.$hinhanh2);
	move_uploaded_file($hinhanh3_tmp, '../../../images/'.$hinhanh3);
	


}elseif (isset($_POST['suasanpham'])) {

//sửa
if ($hinhanh !='') {

	# code...
	move_uploaded_file($hinhanh_tmp, '../../../images/'.$hinhanh);
	move_uploaded_file($hinhanh1_tmp, '../../../images/'.$hinhanh1);
	move_uploaded_file($hinhanh2_tmp, '../../../images/'.$hinhanh2);
	move_uploaded_file($hinhanh3_tmp, '../../../images/'.$hinhanh3);

	
	$sql_sua="UPDATE tbl_sanpham SET thutu='".$thutu."', ten_sanpham='".$tensanpham."' , ma_sanpham='".$ma_sp."' ,gia_sanpham='".$gia_sp."',hinhanh='".$hinhanh."',hinh_1='".$hinhanh1."',hinh_2='".$hinhanh2."',hinh_3='".$hinhanh3."'  ,mota='".$mota."' ,thongtin='".$thongtin."', download='".$download."',danhmuc='".$danhmuc."',nhaphattrien='".$nhaphattrien."' WHERE thutu='$_GET[thutu]'";
	$sql="SELECT * from tbl_sanpham where thutu='$_GET[thutu]' limit 1 ";
	$row=mysqli_query($mysqli,$sql);

	while($row1=mysqli_fetch_array($row)){
		unlink('../../../images/'.$row1['hinhanh']);
		unlink('../../../images/'.$row1['hinh_1']);
		unlink('../../../images/'.$row1['hinh_2']);
		unlink('../../../images/'.$row1['hinh_3']);
	}

}else {
	# code...

	$sql_sua="UPDATE tbl_sanpham SET thutu='".$thutu."', ten_sanpham='".$tensanpham."' , ma_sanpham='".$ma_sp."' ,gia_sanpham='".$gia_sp."'  ,mota='".$mota."' ,thongtin='".$thongtin."', download='".$download."',danhmuc='".$danhmuc."',nhaphattrien='".$nhaphattrien."' WHERE thutu='$_GET[thutu]'";
}




	mysqli_query($mysqli,$sql_sua);
	header('Location:../../index.php?action=quanlysanpham&query=them');
	
}else {
	

	$sql="SELECT * from tbl_sanpham where  ma_sanpham='$ma_sp' limit 1 ";
	$row=mysqli_query($mysqli,$sql);
	move_uploaded_file($hinhanh_tmp, '../../../images/'.$hinhanh);
	move_uploaded_file($hinhanh1_tmp, '../../../images/'.$hinhanh1);
	move_uploaded_file($hinhanh2_tmp, '../../../images/'.$hinhanh2);
	move_uploaded_file($hinhanh3_tmp, '../../../images/'.$hinhanh3);
	while($row1=mysqli_fetch_array($row)){
		unlink('../../../images/'.$row1['hinhanh']);
		unlink('../../../images/'.$row1['hinh_1']);
		unlink('../../../images/'.$row1['hinh_2']);
		unlink('../../../images/'.$row1['hinh_3']);
	} 

	// $ma_sp1=$_GET['ma_sanpham'];
	
	$ma_sp1=$_GET['ma_sanpham'];
	$sql_xoa="DELETE FROM tbl_sanpham WHERE ma_sanpham='".$ma_sp1."'";

	
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlysanpham&query=them');
} 
 ?>
