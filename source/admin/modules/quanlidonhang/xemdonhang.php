<p>Xem đơn hàng</p>
<?php
	$code = $_GET['ma_donhang'];
	$sql_lietke_dh = "SELECT * FROM tbl_thongtingiohang,tbl_sanpham WHERE tbl_thongtingiohang.id_thongtingiohang=tbl_sanpham.thutu AND tbl_thongtingiohang.ma_donhang='".$code."' ORDER BY tbl_thongtingiohang.thutu DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Mã đơn hàng</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
  
  
  </tr>
  <?php
  $i = 0;
  $tongtien = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  	$thanhtien = $row['gia_sanpham']*$row['soluong'];
  	$tongtien += $thanhtien ;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['ma_donhang'] ?></td>
    <td><?php echo $row['ten_sanpham'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo number_format($row['gia_sanpham'],0,',','.').'vnđ' ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
   	
  </tr>
  <?php
  } 
  ?>
  <tr>
  	<td colspan="6">
   		<p>Tổng tiền : <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p>
   	</td>
   
  </tr>
 
</table>