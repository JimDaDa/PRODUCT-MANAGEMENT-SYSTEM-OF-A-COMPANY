<div class="container">
 
  <div class="arrow-steps clearfix">
    <div class="step done "> <span> <a href="index1.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step done"> <span><a href="index1.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
    <div class="step done"> <span><a href="index1.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
    <div class="step current"> <span><a href="index1.php?quanly=donhangdadat" >Lịch sử đơn hàng</a><span> </div>
   
  </div>
 
</div>

<h3>Lịch sử đơn hàng</h3>
<?php

	// $code = $_GET['ma_donhang'];
	$ten = $_SESSION['user'];
	$sql_lietke_dh = "SELECT * FROM tbl_dangky,tbl_giohang WHERE tbl_giohang.ten_khachhang ='".$ten."'  ";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
 
?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
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
    <!-- <th>In</th> -->
  	<th>Hình thức thanh toán</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
    // print_r($row);
  	$i++;
  ?>
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
   		<a href="index1.php?quanly=xemdonhang&ma_donhang=<?php echo $row['ma_donhang'] ?>">Xem đơn hàng</a> 
   	</td>
    <!-- <td>
      <a href="index1.php?quanly=indonhang&ma_donhang=<?php echo $row['ma_donhang'] ?>">In Đơn hàng</a> 
    </td> -->
   	<td>
   	<?php echo $row['phuongthuctt'] ?>
   		</td> 
  </tr>
  <?php
    }

?>
 
</table>
<style>

.clearfix:after {
      clear: both;
      content: "";
      display: block;
      height: 0;
    }
    .arrow-steps .step {
      font-size: 14px;
      text-align: center;
      color: #777;
      cursor: default;
      margin: 0 1px 0 0;
      padding: 10px 0px 10px 0px;
      width: 15%;
      float: left;
      position: relative;
      background-color: #ddd;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    
    .arrow-steps .step a {
      color: #777;
      text-decoration: none;
    }
    
    .arrow-steps .step:after,
    .arrow-steps .step:before {
      content: "";
      position: absolute;
      top: 0;
      right: -17px;
      width: 0;
      height: 0;
      border-top: 19px solid transparent;
      border-bottom: 17px solid transparent;
      border-left: 17px solid #ddd;
      z-index: 2;
    }
    
    .arrow-steps .step:before {
      right: auto;
      left: 0;
      border-left: 17px solid #fff;
      z-index: 0;
    }
    
    .arrow-steps .step:first-child:before {
      border: none;
    }
    
    .arrow-steps .step:last-child:after {
      // border: none;
    }
    
    .arrow-steps .step:first-child {
      border-top-left-radius: 4px;
      border-bottom-left-radius: 4px;
    }
    
    .arrow-steps .step:last-child {
      border-top-right-radius: 4px;
      border-bottom-right-radius: 4px;
    }
    
    .arrow-steps .step span {
      position: relative;
    }
    
    *.arrow-steps .step.done span:before {
      opacity: 1;
      content: "";
      position: absolute;
      top: -2px;
      left: -10px;
      font-size: 11px;
      line-height: 21px;
    }
    
    .arrow-steps .step.current {
      color: #fff;
      background-color: #5599e5;
    }
    
    .arrow-steps .step.current a {
      color: #fff;
      text-decoration: none;
    }
    
    .arrow-steps .step.current:after {
      border-left: 17px solid #5599e5;
    }
    
    .arrow-steps .step.done {
      color: #173352;
      background-color: #2f69aa;
    }
    
    .arrow-steps .step.done a {
      color: #173352;
      text-decoration: none;
    }
    
    .arrow-steps .step.done:after {
      border-left: 17px solid #2f69aa;
    }  

    

       img.cangiua {display: block; margin-left: auto; margin-right: auto;}

</style>

<script>$(document).ready(function() {

var back = $(".prev");
var next = $(".next");
var steps = $(".step");

next.bind("click", function() {
  $.each(steps, function(i) {
    if (!$(steps[i]).hasClass('current') && !$(steps[i]).hasClass('done')) {
      $(steps[i]).addClass('current');
      $(steps[i - 1]).removeClass('current').addClass('done');
      return false;
    }
  })
});
back.bind("click", function() {
  $.each(steps, function(i) {
    if ($(steps[i]).hasClass('done') && $(steps[i + 1]).hasClass('current')) {
      $(steps[i + 1]).removeClass('current');
      $(steps[i]).removeClass('done').addClass('current');
      return false;
    }
  })
});

})</script>