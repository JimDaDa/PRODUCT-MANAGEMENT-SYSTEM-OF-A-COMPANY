<?php 
// session_start();
include("config/config.php");
require('../carbon/autoload.php');
use Carbon\Carbon;
    use Carbon\CarbonInterval;
    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();


	if(isset($_GET['ma_donhang'])){
		$code_cart = $_GET['ma_donhang'];
		$sql_update ="UPDATE tbl_giohang SET trangthai=0 WHERE ma_donhang='".$code_cart."'";
		$query = mysqli_query($mysqli,$sql_update);

		

		header('Location:../../index.php?action=quanlidonhang&query=them');
	} 
?>
