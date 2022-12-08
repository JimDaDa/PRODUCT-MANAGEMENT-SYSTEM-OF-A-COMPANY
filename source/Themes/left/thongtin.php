<!-- Giỏ hàng -->

 

 		
	
		
		


	
	
		<?php
			$tongtien = 0;
			foreach($_SESSION['them'] as $key => $value){
				$thanhtien = $value['soluong']*$value['gia_sanpham'];
				$tongtien+=$thanhtien;

			} 
			$tongtien_vnd = $tongtien;
			$tongtien_usd = round($tongtien/22667);
		?>
		
	
   

<!-- MOMO -->
	
	
	<p></p>
				 		
            

	</div>

</div>

		  

</div>

<section class="checkout spad">
        <div class="container">
		<div class="arrow-steps clearfix">
			<div class="step done"> <span> <a href="index1.php?quanly=giohang" >Giỏ hàng</a></span> </div>
			<div class="step done"> <span><a href="index1.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
			<div class="step current"> <span><a href="index1.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
			<div class="step"> <span><a href="index1.php?quanly=donhangdadat" >Lịch sử đơn hàng</a><span> </div>
		</div>
            <div class="checkout__form">
                <h4>Thông tin thanh toán</h4>
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
						$phone = '';
						$address = '';
						$note = '';
					}
				?>
                <form action="Themes/left/xulythanhtoan.php" method="POST">
                    <div class="row">
                        <div class="col-lg-7 col-md-5">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="checkout__input">
                                        <p>Họ và tên<span>*</span></p>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="checkout__input">
                                    <b><?php echo $name ?></b>
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-lg-2">
                                    <div class="checkout__input">
                                        <p>Địa chỉ<span>*</span></p>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="checkout__input">
                                    <b><?php echo $address ?></b> 
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-lg-2">
                                    <div class="checkout__input">
                                        <p>SĐT<span>*</span></p> 
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="checkout__input">
                                    <b><?php echo $phone ?></b>  
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-lg-2">
                                    <div class="checkout__input">
                                        <p>Ghi chú<span>*</span></p>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="checkout__input">
                                    <b><?php echo $note ?></b>  
                                    </div>
                                </div>
                            </div>
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
							
							<div class="checkout__input__checkbox">
								<label for="payment">
									Thanh toán khi nhận hàng
									<!-- <input type="checkbox" id="payment"> -->
									<input type="checkbox" id="payment" class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="Tiền mặt" >
									<span class="checkmark"></span>
								</label>
							</div>
							<div class="checkout__input__checkbox">
								<label for="paypal">
									Thanh toán MOMO
									<!-- <input type="checkbox" id="paypal"> -->
									<input type="checkbox" id="paypal" class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="Chuyển khoản">
									<span class="checkmark"></span>
								</label>
							</div>
							
							<?php
								if(isset($_SESSION['user']))
								{
							?>
									<input type="submit" value="Đặt hàng" name="redirect" class="site-btn">
									<!-- <button type="submit" class="site-btn"><a href="index1.php?quanly=thongtinthanhtoan">THANH TOÁN</a></button> -->
									
									

	</form>
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
	
