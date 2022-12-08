<h3>Thêm sản phẩm </h3>

<table border="1" width="100%" class="table table-dark">
  <form method="POST" action="modules/quanlisanpham/xuly.php" enctype="multipart/form-data">
   <tr>
    <th>Thứ tự</th>
    
    <td><input type="text" name="thutu"></td>
    
  
  </tr>

  <tr>
    <th>Tên sản phẩm</th>
    
    <td><input type="text" name="ten_sanpham" ></td>
  
  </tr>
  <tr>
    <th>Phiên bản</th>
    
    <td><input type="text" name="ma_sanpham" ></td>
  
  </tr>
  <tr>
    <th>Giá sản phẩm</th>
    
    <td><input type="text" name="gia_sanpham" ></td>
  
  </tr>
<tr>
    <th>Hình ảnh</th>
    
    <td><input type="file" name="hinhanh" ></td>
  
  </tr>
  <tr> 
    <th>Hình ảnh 1</th>
    
    <td><input type="file" name="hinh_1" ></td>
  
  </tr>
  <tr>
    <th>Hình ảnh 2</th>
    
    <td><input type="file" name="hinh_2" ></td>
  
  </tr>
  <tr>
    <th>Hình ảnh 3</th>
    
    <td><input type="file" name="hinh_3" ></td>
  
  </tr>

  <tr>
    <th>Mô tả</th>
    
    <td><textarea rows="10" cols="120" name="mota" style="width: 100% resize: none;"></textarea></td>
  
  </tr>

  <tr>
    <th>Thông tin thêm</th>
    
    <td><textarea rows="10" cols="120" name="thongtin" style="width: 100% resize: none;"></textarea></td>
   
  </tr>

 
<tr>
    <th>Danh mục sản phẩm</th>
    
    <td>
      <select name="danhmuc">
<?php 
  $sql_danhmuc=" SELECT * FROM tbl_danhmuc ORDER BY thutu asc ";
  $query_dm = mysqli_query($mysqli,$sql_danhmuc);
  while ($row_dm=mysqli_fetch_array($query_dm)) {
   
?>
 <option value="<?php  echo $row_dm['thutu']?>"><?php  echo $row_dm['ten_danhmuc']?></option>
         <?php 
       
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
   
    <td colspan="2"><input class="btn btn-primary" type="submit" name="themsanpham" value ="Thêm sản phẩm"></td>
    
  
  </tr>
</form>
 
</table>
