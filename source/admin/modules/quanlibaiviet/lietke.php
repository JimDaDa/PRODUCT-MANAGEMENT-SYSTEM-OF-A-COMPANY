
<?php 
include('config/config.php');
$sql_lietke="SELECT * FROM tbl_baiviet order by id_rating asc  ";
$row_lietke=mysqli_query($mysqli,$sql_lietke);
 ?>
 <h3>Liệt kê bài viết </h3>



<div class="container" >
  
            
  <table class="table table-hover" width="100%" >

    <thead>
      <tr>
       <th>Id</th>
    <th>STT</th>
    <th>Email</th>
    <th>Rating</th>
    <th>Comment</th>
    <th>Tên sản phẩm</th>
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
      <td><?php echo $row['id_rating'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['rating'] ?></td>
    <td><?php echo $row['comment'] ?></td>
    <td><?php echo $row['ten_sanpham'] ?></td>

    <td>
        <a href="modules/quanlibaiviet/xuly.php?thutu=<?php echo $row['id_rating']?> ">Xóa  |</a> 
        <a href="index.php?action=quanlibaiviet&query=sua&thutu=<?php echo $row['id_rating']?>">Sửa</a>
    </td>
      </tr>
    </tbody>

  <?php 

}
   ?>

  </table>


</div>












