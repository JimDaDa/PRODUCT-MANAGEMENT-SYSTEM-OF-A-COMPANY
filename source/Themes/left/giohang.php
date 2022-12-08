<p>
	<?php
	//  session_start();
		include('admin/config/config.php');
		if(isset($_SESSION['dangnhap']))
		{
			echo 'Xin chào: '.'<span style="color:blue">'.$_SESSION['user'].'</span>';
		} 
	?>
</p>

<?php
	// $ten=$_SESSION['user'];
	if(isset($_SESSION['them'])){
	}
?>

<?php
	if(isset($_SESSION['user']))
	{
?>
	<div class="container">
	<!-- Responsive Arrow Progress Bar -->
		<div class="arrow-steps clearfix">
			<div class="step current"> <span> <a href="index1.php?quanly=giohang" >Giỏ hàng</a></span> </div>
			<div class="step"> <span><a href="index1.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
			<div class="step"> <span><a href="index1.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
			<div class="step"> <span><a href="index1.php?quanly=donhangdadat" >Lịch sử đơn hàng</a><span> </div>
		</div>
 



		</div>

<?php
	} 
?>


<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
									<th>Mã</th>
                                    <th class="shoping__product">Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th></th>
                                </tr>
                                <?php
                                  if(isset($_SESSION['them'])){
                                  $i = 0;
                                  $tongtien = 0;
                                  foreach($_SESSION['them'] as $cart_item)
                                  {
                                    $thanhtien = $cart_item['soluong']*$cart_item['gia_sanpham'];
                                    $tongtien+=$thanhtien;
                                    $i++;
                                ?>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="shoping__cart__price">
                                      <?php echo $i; ?>
                                    </td>
									                  <td class="shoping__cart__total">
                                      <?php echo $cart_item['ma_sanpham']; ?>
                                    </td>
                                    <td class="shoping__cart__item">
                                        <img src="images/<?php echo $cart_item['hinhanh']; ?>" width="80px">
                                        <?php echo $cart_item['ten_sanpham']; ?>
                                    </td>
                                    <td class="shoping__cart__price">
                                      <?php echo number_format($cart_item['gia_sanpham'],0,',','.').'vnđ'; ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            
												<a href="index1.php?quanly=themgiohang&cong=<?php echo $cart_item['thutu'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
			                                  	<?php echo $cart_item['soluong']; ?>
			                                  	<a href="index1.php?quanly=themgiohang&tru=<?php echo $cart_item['thutu'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>
                                            
                                        </div>
                                        
                                    </td>
                                    <td class="shoping__cart__total">
                                      <?php echo number_format($thanhtien,0,',','.').'vnđ' ?>
                                    </td>
                                    <td class="shoping__cart__item__close">
										<a href="index1.php?quanly=themgiohang&xoa=<?php echo $cart_item['thutu'] ?>"><span class="icon_close" ></span></a>
                                    </td>
                                </tr>
                                <?php
		                                }
	                              ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <ul>
						<li>Xóa tất cả <p style="float: right;"><a href="index1.php?quanly=themgiohang&xoatatca=1"><span class="icon_close" ></span></a></p></li>
							<li>Tổng tiền: <span><?php echo number_format($tongtien,0,',','.').'vnđ' ?></span></li>
							
							
                        </ul>
                        <?php
                          if(isset($_SESSION['user'])){
                        ?>
                        <a href="index1.php?quanly=vanchuyen" class="primary-btn">Hình thức vận chuyển</a>
                        <?php
                          }else
                          {
                        ?>
						       <a href="Themes/left/login1.php"  class="primary-btn">Đăng nhập đặt hàng</a>
						<?php
						}
						?>
		
                    </div>
		
                </div>
	
                </div>
                
				<?php	
              }else
              { 
            ?>
            <tr>
              <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
            </tr>
            <?php
            } 
            ?>
           
        </div>
		
    </section>

    <!-- Shoping Cart Section End -->
	<script>$(document).ready(function() 
{

	var back = $(".prev");
	var next = $(".next");
	var steps = $(".step");

	next.bind("click", function()
	{
		$.each(steps, function(i) 
		{
			if (!$(steps[i]).hasClass('current') && !$(steps[i]).hasClass('done')) 
			{
				$(steps[i]).addClass('current');
				$(steps[i - 1]).removeClass('current').addClass('done');
				return false;
			}
		})
	});
	
	back.bind("click", function() 
	{
		$.each(steps, function(i) 
		{
			if ($(steps[i]).hasClass('done') && $(steps[i + 1]).hasClass('current')) 
			{
				$(steps[i + 1]).removeClass('current');
				$(steps[i]).removeClass('done').addClass('current');
			return false;
			}
		})
	});
})</script>