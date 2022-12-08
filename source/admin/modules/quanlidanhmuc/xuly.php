<?php 
session_start();
include("../../config/config.php");



#Xóa
if(isset( $_GET['query'] )){

    if ($_GET['query'] == 'xoa'){
        $thutu1=$_GET['thutu'];
        $sql_xoa="DELETE FROM tbl_danhmuc WHERE thutu='".$thutu1."'";
    
        
        $delete_result= mysqli_query($mysqli,$sql_xoa);
      
    
        if($delete_result){
            unlink('../../../img/categories/'.$row3['hinhanh_dm']);
        }
        else{
            echo('Xóa không thành công');
        }
    
        header('Location:../../index.php?action=quanlydanhmuc&query=them');
    }
}



$tenloaisanpham = $_POST['ten_danhmuc'];
$thutu=$_POST['thutu'];
//icon

$hinhanh1=$_FILES['hinhanh_dm']['name'];
$hinhanh_tmp1=$_FILES['hinhanh_dm']['tmp_name'];
$hinhanh=time().'_'.$hinhanh1;

if (isset($_POST['themdanhmuc'])) {
    # thêm
    $sql_add="INSERT INTO tbl_danhmuc(ten_danhmuc,thutu,hinhanh_dm) value('".$tenloaisanpham."','".$thutu."','".$hinhanh."')";
    mysqli_query($mysqli,$sql_add);
    header('Location:../../index.php?action=quanlydanhmuc&query=them');
    move_uploaded_file($hinhanh_tmp1, '../../../img/categories/'.$hinhanh);


}

elseif (isset($_POST['suadanhmuc'])) {

    //sửa
    if ($hinhanh != '') {

        # code...
        move_uploaded_file($hinhanh_tmp1, '../../../img/categories/'.$hinhanh);
        
        $sql_sua="UPDATE tbl_danhmuc SET ten_danhmuc='".$tenloaisanpham."' ,thutu='".$thutu."' ,hinhanh_dm= '".$hinhanh."' WHERE thutu='$_GET[thutu]'";
        $update_result = mysqli_query($mysqli,$sql_sua);

      
        if(!$update_result){
            unlink('../../../img/categories/'.$hinhanh);
        }

    header('Location:../../index.php?action=quanlydanhmuc&query=them');
        
    }

   
}



?>