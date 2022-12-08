
<?php 
$sql_sua="SELECT * FROM tbl_sanpham WHERE thutu='$_GET[thutu]' LIMIT 1 ";
$row_sua=mysqli_query($mysqli,$sql_sua);
 ?>

 <h3>Sửa sản phẩm </h3>



<table  class="table table-hover">

  <?php 
while ($row= mysqli_fetch_array($row_sua)) {
  # code...


  ?>
  <form method="POST" action="modules/quanlisanpham/xuly.php?thutu=<?php echo $_GET['thutu']?>" enctype="multipart/form-data">
   <tr>
    <th>Thứ tự</th>
    
    <td><input type="text" name="thutu"></td>
    
  
  </tr>

  <tr>
    <th>Tên sản phẩm</th>
    
    <td><input type="text" value="<?php echo $row['ten_sanpham'] ?>" name="ten_sanpham" ></td>
  
  </tr>
  <tr>
    <th>Phiên bản</th>
    
    <td><input type="text" value="<?php echo $row['ma_sanpham'] ?>" name="ma_sanpham" ></td>
  
  </tr>
  <tr>
    <th>Giá sản phẩm</th>
    
    <td><input type="text" value="<?php echo $row['gia_sanpham'] ?>" name="gia_sanpham" ></td>
  
  </tr> 
<tr>
    <th>Hình ảnh</th>
    
    <td><input type="file" name="hinhanh" ></td>
     <td><img src="../images/<?php echo $row['hinhanh'] ?> " width="150px"></td>
  
  </tr>
  <tr>
    <th>Hình ảnh minh họa 1</th>
    
    <td><input type="file" name="hinh_1" ></td>
     <td><img src="../images/<?php echo $row['hinh_1'] ?> " width="100%"></td>
  
  </tr>
  <tr>
    <th>Hình ảnh minh họa 2</th>
    
    <td><input type="file" name="hinh_2" ></td>
     <td><img src="../images/<?php echo $row['hinh_2'] ?> " width="100%"></td>
  
  </tr>
  <tr>
    <th>Hình ảnh minh họa 3</th>
    
    <td><input type="file" name="hinh_3" ></td>
     <td><img src="../images/<?php echo $row['hinh_3'] ?> " width="100%"></td>
  
  </tr>

  <tr>
    <th>Mô tả</th>
    
    <td><textarea rows="10" cols="120" name="mota" style="width: 100% resize: none;"> <?php echo $row['mota'] ?></textarea></td>
  
  </tr>
  <tr>
    <th>Thông tin thêm </th>
    
    <td><textarea rows="10" cols="120" name="thongtin" style="width: 100% resize: none;"> <?php echo $row['thongtin'] ?></textarea></td>
  
  </tr>
   


<tr>
    <th>Danh mục sản phẩm</th>
    
    <td>
      <select name="danhmuc">
<?php 
  $sql_danhmuc=" SELECT * FROM tbl_danhmuc ORDER BY thutu asc ";
  $query_dm = mysqli_query($mysqli,$sql_danhmuc);
  while ($row_dm=mysqli_fetch_array($query_dm)) {
    if ($row_dm['danhmuc']==$row['danhmuc']) {
      # code...
    
   
?>
 <option selected value="<?php  echo $row_dm['thutu']?>"><?php  echo $row_dm['ten_danhmuc']?></option>
         <?php 
       
}
else {
  ?>
  <option value="<?php  echo $row_dm['thutu']?>"><?php  echo $row_dm['ten_danhmuc']?></option>
<?php
    }
}
       ?>

         
      </select></td>
  
  </tr>
  

 
  <tr>
    <th>Nhà phát triển</th>
    
    <td>
      <select name="nhaphattrien">
<?php 
  $sql_nhaphattrien=" SELECT * FROM tbl_nhaphattrien ORDER BY thutu asc ";
  $query_npt = mysqli_query($mysqli,$sql_nhaphattrien);
  while ($row_npt=mysqli_fetch_array($query_npt)) {
   
?>
 <option value="<?php  echo $row_npt['thutu']?>"><?php  echo $row_npt['ten_nhaphattrien']?></option>
         <?php 
       
}

       ?>

         
      </select></td>
  
  </tr>
  




 <tr>
   
    <td colspan="2"><input type="submit" name="suasanpham" value ="Sửa sản phẩm"></td>
    
  
  </tr>
</form>

<?php 
} 

?>
 
</table>
