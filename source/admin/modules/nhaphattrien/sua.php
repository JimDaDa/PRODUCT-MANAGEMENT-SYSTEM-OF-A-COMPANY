
<?php 
$sql_sua="SELECT * FROM tbl_nhaphattrien WHERE thutu='$_GET[thutu]' LIMIT 1 ";
$row_sua=mysqli_query($mysqli,$sql_sua);
 ?>

 <h3>Sửa danh mục sản phẩm </h3>

<table border="1" width="50%" style="border-collapse: collapse;">
  <form method="POST" action="modules/nhaphattrien/xuly.php?thutu=<?php echo $_GET['thutu']?>">
  <?php 
    while ($dong=mysqli_fetch_array($row_sua)) {
      # code...
    
  ?>
  <tr>

    <th>Tên nhà phát triển</th>
    
    <td><input type="text" value="<?php echo $dong['ten_nhaphattrien']?>" name="ten_nhaphattrien" ></td>
  
  </tr>

 <tr>
    <th>Thứ tự</th>
    
    <td><input type="text"  value="<?php echo $dong['thutu']?>" name="thutu"></td>
    
  
  </tr>

 <tr>
   
    <td colspan="2"><input type="submit" name="suanhaphattrien" value ="Sửa tên nhà phát triển"></td>
    
  
  </tr>
  <?php 

}
   ?>
</form>
 
</table>