<?php
	// session_start();
	include('admin/config/config.php');
	//them so luong
	if(isset($_GET['cong'])){
		$id=$_GET['cong'];
		foreach($_SESSION['them'] as $cart_item){
			if($cart_item['thutu']!=$id){
				$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'thutu'=>$cart_item['thutu'],'soluong'=>$cart_item['soluong'],'gia_sanpham'=>$cart_item['gia_sanpham'],'hinhanh'=>$cart_item['hinhanh'],'ma_sanpham'=>$cart_item['ma_sanpham']);
				$_SESSION['them'] = $product;
			}else{
				$tangsoluong = $cart_item['soluong'] + 1;
				if($cart_item['soluong']<=9){
					
					$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'thutu'=>$cart_item['thutu'],'soluong'=>$tangsoluong,'gia_sanpham'=>$cart_item['gia_sanpham'],'hinhanh'=>$cart_item['hinhanh'],'ma_sanpham'=>$cart_item['ma_sanpham']);
				}else{
					$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'thutu'=>$cart_item['thutu'],'soluong'=>$cart_item['soluong'],'gia_sanpham'=>$cart_item['gia_sanpham'],'hinhanh'=>$cart_item['hinhanh'],'ma_sanpham'=>$cart_item['ma_sanpham']);
				}
				$_SESSION['them'] = $product;
			}
			
		}

			// header("Location:index1.php?quanly=giohang");
	
		
	}
	?>


<script> location.replace("index1.php?quanly=giohang"); </script>

	<?php
	//tru so luong
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['them'] as $cart_item){
			if($cart_item['thutu']!=$id){
				$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'thutu'=>$cart_item['thutu'],'soluong'=>$cart_item['soluong'],'gia_sanpham'=>$cart_item['gia_sanpham'],'hinhanh'=>$cart_item['hinhanh'],'ma_sanpham'=>$cart_item['ma_sanpham']);
				$_SESSION['them'] = $product;
			}else{
				$tangsoluong = $cart_item['soluong'] - 1;
				if($cart_item['soluong']>1){
					
					$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'thutu'=>$cart_item['thutu'],'soluong'=>$tangsoluong,'gia_sanpham'=>$cart_item['gia_sanpham'],'hinhanh'=>$cart_item['hinhanh'],'ma_sanpham'=>$cart_item['ma_sanpham']);
				}else{
					$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'thutu'=>$cart_item['thutu'],'soluong'=>$cart_item['soluong'],'gia_sanpham'=>$cart_item['gia_sanpham'],'hinhanh'=>$cart_item['hinhanh'],'ma_sanpham'=>$cart_item['ma_sanpham']);
				}
				$_SESSION['them'] = $product;
			}
			
		}
		// header('Location:index1.php?quanly=giohang');
	}
	//xoa san pham
	if(isset($_SESSION['them'])&&isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['them'] as $cart_item){

			if($cart_item['thutu']!=$id){
				$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'thutu'=>$cart_item['thutu'],'soluong'=>$cart_item['soluong'],'gia_sanpham'=>$cart_item['gia_sanpham'],'hinhanh'=>$cart_item['hinhanh'],'ma_sanpham'=>$cart_item['ma_sanpham']);
			}

		$_SESSION['them'] = $product;
		// header('Location:index1.php?quanly=giohang');
		}
	}
	//xoa tat ca
	if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
		unset($_SESSION['them']);
		// header('Location:index1.php?quanly=giohang');
	}
	//them sanpham vao gio hang
	if(isset($_POST['themgiohang'])){
		//session_destroy();
		$id=$_GET['thutu'];
		$soluong=1;
		$sql ="SELECT * FROM tbl_sanpham WHERE thutu='".$id."' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_array($query);
		if($row){
			$new_product=array(array('ten_sanpham'=>$row['ten_sanpham'],'thutu'=>$id,'soluong'=>$soluong,'gia_sanpham'=>$row['gia_sanpham'],'hinhanh'=>$row['hinhanh'],'ma_sanpham'=>$row['ma_sanpham']));
			//kiem tra session gio hang ton tai
			if(isset($_SESSION['them'])){
				$found = false;
				foreach($_SESSION['them'] as $cart_item){
					//neu du lieu trung
					if($cart_item['thutu']==$id){
						$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'thutu'=>$cart_item['thutu'],'soluong'=>$soluong+1,'gia_sanpham'=>$cart_item['gia_sanpham'],'hinhanh'=>$cart_item['hinhanh'],'ma_sanpham'=>$cart_item['ma_sanpham']);
						$found = true;
					}else{
						//neu du lieu khong trung
						$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'thutu'=>$cart_item['thutu'],'soluong'=>$cart_item['soluong'],'gia_sanpham'=>$cart_item['gia_sanpham'],'hinhanh'=>$cart_item['hinhanh'],'ma_sanpham'=>$cart_item['ma_sanpham']);
					}
				}
				if($found == false){
					//lien ket du lieu new_product voi product
					$_SESSION['them']=array_merge($product,$new_product);
				}else{
					$_SESSION['them']=$product;
				}
			}else{
				$_SESSION['them'] = $new_product;
			}

		}
		// header('Location:index1.php?quanly=giohang');
		// print_r($_SESSION['them']);
	}
	
	
	
?>

