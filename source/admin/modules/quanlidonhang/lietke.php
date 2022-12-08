
<?php 
$sql_lietke="SELECT * FROM tbl_giohang,tbl_dangky ORDER BY ma_donhang  asc  ";
$row_lietke=mysqli_query($mysqli,$sql_lietke);
 ?>
 <h3>Liệt kê đơn hàng </h3>



<div class="container" >
  
            
  <table class="table table-hover" width="100%" >

    <thead>
      <tr>
      <th>Id</th>
    <th>Mã đơn hàng</th>
    <th>Tên khách hàng</th>
    <th>Địa chỉ</th>
    <th>Email</th>
    <th>Số điện thoại</th>
    <th>Tình trạng</th>
    <th>Ngày đặt</th>
  	<th>Quản lý</th>
    <th>In</th>
      </tr>
</thead>
<?php 
    $i=0;
    while($row=mysqli_fetch_array($row_lietke)) {
        $i++;
      # code...
    
    
   ?>

    

    <tbody >

      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['ma_donhang'] ?></td>
        <td><?php echo $row['ten_dangky'] ?></td>
      <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td>
    	<?php if($row['trangthai']==1){
    		echo '<a href="modules/quanlidonhang/xuly.php?ma_donhang='.$row['ma_donhang'].'">Đơn hàng mới</a>';
    	}else{
    		echo 'Đã xem';
    	}
    	?>
    </td>
    <td><?php echo $row['thoigian'] ?></td>
   	<td>
   		<a href="index.php?action=donhang&query=xemdonhang&ma_donhang=<?php echo $row['ma_donhang'] ?>">Xem đơn hàng</a> 
   	</td>
    <td>
      <a href="modules/quanlidonhang/in.php?ma_donhang=<?php echo $row['ma_donhang'] ?>">In Đơn hàng</a> 
    </td>
   
  </tr>
  <?php
  } 
  ?>
    
    

  </table>


</div>












