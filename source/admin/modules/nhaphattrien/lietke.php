

<?php 
$sql_lietke="SELECT * FROM tbl_nhaphattrien ORDER BY thutu asc  ";
$row_lietke=mysqli_query($mysqli,$sql_lietke);
 ?>
 <h3>Liệt kê các nhà sản xuất </h3>



<div class="container" >
  
            
  <table class="table table-hover" width="100%" >

    <thead>
      <tr>
       <th>Id</th>
    <th>STT</th>
    <th>Tên nhà phát triển</th>
     <th>Quản lí</th>
      </tr>
</thead>
<?php 
    $i=0;
    while($row=mysqli_fetch_array($row_lietke)) {
        $i++;
      # code...
    
    
   ?>

    

    <tbody >

      <tr>
        <td><?php echo $i ?></td>
      <td><?php echo $row['thutu'] ?></td>
    <td><?php echo $row['ten_nhaphattrien'] ?></td>

    <td>
        <a href="modules/nhaphattrien/xuly.php?thutu=<?php echo $row['thutu']?> ">Xóa  |</a> 
        <a href="?action=nhaphattrien&query=sua&thutu=<?php echo $row['thutu']?>">Sửa</a>
    </td>
      </tr>
    </tbody>

  <?php 

}
   ?>

  </table>


</div>












