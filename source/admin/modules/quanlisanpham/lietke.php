
<?php 

$sql_lietke="SELECT * FROM tbl_sanpham  ORDER BY thutu asc  ";
$row_lietke=mysqli_query($mysqli,$sql_lietke);
 ?>
 <h3>Liệt kê sản phẩm </h3>
<table border="1" style="width: 100%" class="table table-hover">
  
  
  <tr>
  	
  	<th>STT</th>
    <th>ID</th>
    <th>Tên sản phẩm </th>
     <th>Phiên bản </th>
      <th>Giá sản phẩm </th>
         
        <th>Hình ảnh</th>
        <th>Hình ảnh minh họa 1</th>
        <th>Hình ảnh minh họa 2</th>
        <th>Hình ảnh minh họa 3</th>
        <th>Mô tả sản phẩm </th>

     <th>Additional Information</th>
    
     <th>Quản lý </th>
    
  
  </tr>

  <?php 
  	$i=0;
  	while($row=mysqli_fetch_array($row_lietke)) {
  			$i++;
  	
  	
  	
   ?>

 <tr>
   <td><?php echo $i ?></td>
     <td><?php echo $row['thutu'] ?></td>
    <td><?php echo $row['ten_sanpham'] ?></td>
     <td><?php echo $row['ma_sanpham'] ?></td>
 <td><?php echo $row['gia_sanpham'] ?></td>
 

  <td><img src="../images/<?php echo $row['hinhanh'] ?> " width="150px"></td>

  <td><img src="../images/<?php echo $row['hinh_1'] ?> " width="100%"></td>

  <td><img src="../images/<?php echo $row['hinh_2'] ?> " width="100%"></td>

<td><img src="../images/<?php echo $row['hinh_3'] ?> " width="100%"></td>


 <td><?php echo $row['mota'] ?></td>

 <td><?php echo $row['thongtin'] ?></td>
 

    <td>
    		<a href="modules/quanlisanpham/xuly.php?ma_sanpham=<?php echo $row['ma_sanpham']?> ">Xóa  |</a> 
    		<a href="?action=quanlysanpham&query=sua&thutu=<?php echo $row['thutu']?>">Sửa</a>
    </td>
    
  
  </tr>


  <?php 

}
   ?>

 
</table>
