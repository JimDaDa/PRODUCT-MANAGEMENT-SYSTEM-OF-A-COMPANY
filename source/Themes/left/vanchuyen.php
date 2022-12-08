


<!-- Giỏ hàng -->


<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
		<?php
			if(isset($_SESSION['id_khachhang'])){
		?>
		

		<?php
			} 
		?>
        <div class="checkout__form">
		<div class="arrow-steps clearfix">
		<div class="step done"> <span> <a href="index1.php?quanly=giohang" >Giỏ hàng</a></span> </div>
		<div class="step current"> <span><a href="index1.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
		<div class="step"> <span><a href="index1.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
		<div class="step"> <span><a href="index1.php?quanly=donhangdadat" >Lịch sử đơn hàng</a><span> </div>
	</div>
			<h4>Thông tin vận chuyển</h4>
			<?php
				if(isset($_POST['themvanchuyen'])) 
				{
					$name = $_POST['hovaten'];
					$email = $_POST['email'];
					$phone = $_POST['dienthoai'];
					$address = $_POST['diachi'];
					$note = $_POST['note'];
					$id_dangky = $_SESSION['id_khachhang'];
					$sql_them_vanchuyen = mysqli_query($mysqli,"INSERT INTO tbl_shipping(hovaten,email,dienthoai,diachi,note,thutu) VALUES('$name','$email','$phone','$address','$note','$id_dangky')");
					if($sql_them_vanchuyen)
					{
						echo '<script>alert("Thêm vận chuyển thành công")</script>';
					}
				}
				elseif(isset($_POST['capnhatvanchuyen']))
				{
					$name = $_POST['hovaten'];
					$email = $_POST['email'];
					$phone = $_POST['dienthoai'];
					$address = $_POST['diachi'];
					$note = $_POST['note'];
					$id_dangky = $_SESSION['id_khachhang'];
					$ten=$_SESSION['user'];
					$sql_update_vanchuyen = mysqli_query($mysqli,"UPDATE tbl_shipping SET hovaten='$name',email='$email',dienthoai='$phone',diachi='$address',note='$note',thutu='$id_dangky' WHERE email='$ten'");
					if($sql_update_vanchuyen)
					{
						echo '<script>alert("Cập nhật vận chuyển thành công")</script>';

					}
				}
			?>
			<form action="#" autocomplete="off" method="POST">
				<div class="row">
				<?php
					$ten = $_SESSION['user'];
					$sql_get_vanchuyen = mysqli_query($mysqli,"SELECT * FROM tbl_shipping WHERE email='$ten' LIMIT 1");
					$count = mysqli_num_rows($sql_get_vanchuyen);
					if($count>0)
					{
						$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
						$name = $row_get_vanchuyen['hovaten'];
						$email = $row_get_vanchuyen['email'];
						$phone = $row_get_vanchuyen['dienthoai'];
						$address = $row_get_vanchuyen['diachi'];
						$note = $row_get_vanchuyen['note'];
					}
					else
					{
						$name = '';
						$email = '';
						$phone = '';
						$address = '';
						$note = '';
					}
				?>
					<div class="col-lg-7 col-md-5">
						<div class="checkout__input">
							<p>Họ và tên<span>*</span></p>
							<input type="text" name="hovaten" value="<?php echo $name ?>">
						</div>
						<div class="checkout__input">
							<p>Địa chỉ<span>*</span></p>
							<input type="text" name="diachi"  value="<?php echo $address ?>">
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="checkout__input">
									<p>SĐT<span>*</span></p>
									<input type="text" name="dienthoai"  value="<?php echo $phone ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="checkout__input">
									<p>Email<span>*</span></p>
									<input type="text" name="email" value="<?php echo $email ?>">
								</div>
							</div>
						</div>
						<div class="checkout__input">
							<p>Ghi chú<span>*</span></p>
							<input type="text" name="note"  value="<?php echo $note ?>" placeholder="Ghi chú về đơn đặt hàng của bạn">
						</div>
						<?php
							if($name=='' && $phone=='') {
						?>
						<button type="submit" class="site-btn" name="themvanchuyen">Thêm</button>
							<?php
								} elseif($name!='' && $phone!=''){
							?>
						<button type="submit" name="capnhatvanchuyen" class="site-btn">UPDATE</button>
							<?php
								} 
							?>
					</div>
					
					<div class="col-lg-5 col-md-7">
						<div class="checkout__order">
							<h4>Đơn hàng</h4>
							<div class="checkout__order__products">Sản phẩm <span>Giá</span></div>
							<?php
								if(isset($_SESSION['them']))
								{
									$i = 0;
									$tongtien = 0;
									foreach($_SESSION['them'] as $cart_item){
									$thanhtien = $cart_item['soluong']*$cart_item['gia_sanpham'];
									$tongtien+=$thanhtien;
									$i++;
							?>
							<ul>
								<li><?php echo $cart_item['ten_sanpham']; ?><span><?php echo number_format($cart_item['gia_sanpham'],0,',','.').'vnđ'; ?></span></li>
							</ul>

							
							<?php
								}
							?>
							
							
							
							
							
							<div class="checkout__order__total">Tổng tiền <span><?php echo number_format($tongtien,0,',','.').'vnđ' ?></span></div>
							
							
							<?php
								if(isset($_SESSION['user']))
								{
							?>
									<button type="submit" class="site-btn"><a href="index1.php?quanly=thongtinthanhtoan">THANH TOÁN</a></button>
									<?php
										}else{
									?>
									<button type="submit" class="site-btn"><a href="Themes/left/login1.php">Đăng nhập</a></button>
							<?php
								}
							?>
							
						</div>
					</div>
						<?php	
							}else{ 
						?>
						
						<tr>
							<td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
					
						</tr>
						
						<?php
							} 
						?>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- Checkout Section End -->