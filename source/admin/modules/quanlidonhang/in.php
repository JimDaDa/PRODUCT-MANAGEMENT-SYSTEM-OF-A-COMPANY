<?php
	require('../../../tfpdf/tfpdf.php');
	require('../../config/config.php');

	$pdf = new tFPDF();
	$pdf->AddPage("0");
	// $pdf->SetFont('Arial','B',16);
	// Add a Unicode font (uses UTF-8)
	$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
	$pdf->SetFont('DejaVu','',15);
	
	$pdf->SetFillColor(193,229,252);
	//set header 

	$code = $_GET['ma_donhang'];
	$sql_lietke_dh = "SELECT * FROM tbl_thongtingiohang,tbl_sanpham WHERE tbl_thongtingiohang.id_thongtingiohang=tbl_sanpham.thutu AND tbl_thongtingiohang.ma_donhang='".$code."' ORDER BY tbl_thongtingiohang.id_thongtingiohang DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);

	$pdf->Write(10,'Đơn hàng của bạn gồm có:');
	$pdf->Ln(10);

	$width_cell=array(5,25,170,20,30,40);
   
	$pdf->Cell($width_cell[0],10,'ID',1,0,'C',true);
	$pdf->Cell($width_cell[1],10,'Mã hàng',1,0,'C',true);
	$pdf->Cell($width_cell[2],10,'Tên sản phẩm',1,0,'C',true);
	$pdf->Cell($width_cell[3],10,'Số lượng',1,0,'C',true); 
	$pdf->Cell($width_cell[4],10,'Giá',1,0,'C',true);
	$pdf->Cell($width_cell[5],10,'Tổng tiền',1,1,'C',true); 
	$pdf->SetFillColor(235,236,236); 
	$fill=false;
	$i = 0;
	while($row = mysqli_fetch_array($query_lietke_dh)){
		$i++;
	$pdf->Cell($width_cell[0],30,$i,1,0,'C',$fill);
	$pdf->Cell($width_cell[1],30,$row['ma_donhang'],1,0,'C',$fill);
	$pdf->Cell($width_cell[2],30,$row['ten_sanpham'],1,0,'C',$fill);
	$pdf->Cell($width_cell[3],30,$row['soluong'],1,0,'C',$fill);
	$pdf->Cell($width_cell[4],30,number_format($row['gia_sanpham']),1,0,'C',$fill);
	$pdf->Cell($width_cell[5],30,number_format($row['soluong']*$row['gia_sanpham']),1,1,'C',$fill);
	$fill = !$fill;

	}
	$pdf->Write(10,'Cảm ơn bạn đã đặt hàng tại website của chúng tôi.');
	$pdf->Ln(10);

	$pdf->Output(); 
?>