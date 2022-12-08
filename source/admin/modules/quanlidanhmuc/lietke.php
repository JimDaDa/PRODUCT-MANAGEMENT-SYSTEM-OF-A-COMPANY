
<?php 
$sql_lietke="SELECT * FROM tbl_danhmuc ORDER BY thutu asc  ";
$row_lietke=mysqli_query($mysqli,$sql_lietke);
 ?>
 <h3>Liệt kê danh mục sản phẩm </h3>



<div class="container" >
  
            
  <table class="table table-hover" width="100%" >

    <thead>
      <tr>
       <th>Id</th>
    <th>STT</th>
    <th>Tên danh mục</th>
    <th>Hình ảnh</th>
     <th>Quản lí</th>
      </tr>
</thead>
<?php 
    $i=0;
    while($row=mysqli_fetch_array($row_lietke)) {
        $i++;
      # code...
    
    // print_r($row);
   ?>

    

    <tbody >

      <tr>
        <td><?php echo $i ?></td>
      <td><?php echo $row['thutu'] ?></td>
    <td><?php echo $row['ten_danhmuc'] ?></td>
    <td><img src="../img/categories/<?php echo $row['hinhanh_dm'] ?> " width="150px"></td>
    <td>
        <a href="modules/quanlidanhmuc/xuly.php?query=xoa&thutu=<?php echo $row['thutu']?> ">Xóa  |</a> 
        <a href="?action=quanlidanhmuc&query=sua&thutu=<?php echo $row['thutu']?>">Sửa</a>
    </td>
      </tr>
    </tbody>

  <?php 

}
   ?>

  </table>


</div>












