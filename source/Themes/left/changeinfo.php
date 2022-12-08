


<?php 
session_start();

include('../../admin/config/config.php');
if (isset($_SESSION['user']) == false) {
  echo "<p style='color:red'>Vui lòng đăng nhập </p>";
 exit();
   
}

if (isset($_POST['capnhat']) && $_POST['hovaten']!='' && $_POST['email']!=''  && $_POST['pass']!='' && $_POST['dienthoai']!='' && $_POST['diachi']!='' && $_POST['gender']!='') {

$hovaten =$_POST['hovaten'];
    $email=$_POST['email'];
    $matkhau=$_POST['pass'];
    $dienthoai=$_POST['dienthoai'];
    $diachi=$_POST['diachi'];
     $gioitinh=$_POST['gender'];


 $sql= "SELECT * FROM tbl_dangky WHERE email='".$email."' and matkhau='".$matkhau."' limit 1";
    $row=mysqli_query($mysqli,$sql);
    $count=mysqli_num_rows($row);
    if ($count >0) {

$changesdt=mysqli_query($mysqli,"UPDATE tbl_dangky SET  dienthoai='".$dienthoai."' WHERE email='".$email."' and matkhau='".$matkhau."'");
 
   $changeten=mysqli_query($mysqli,"UPDATE tbl_dangky SET   ten_dangky='".$hovaten."' WHERE email='".$email."' and matkhau='".$matkhau."'");
    $changedc=mysqli_query($mysqli,"UPDATE tbl_dangky SET  diachi='".$diachi."' WHERE email='".$email."' and matkhau='".$matkhau."'");
    $changegen=mysqli_query($mysqli,"UPDATE tbl_dangky SET  gioitinh='".$gioitinh."' WHERE email='".$email."' and matkhau='".$matkhau."'");
    
        echo "<p style='color:green'>Bạn đã cập nhật thành công</p>";

        // header("Location: ../../index.php");
       
       
    }else{
        echo "<p style='color:red'>Không tồn tại email </p>";
         
    }
}
 

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thay Đổi Thông Tin Tài Khoản</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class= "row justify-content-center">
            <div class= "col-md-6 col-sm-10">
                <div class= "login-form border rounded p-3 mt-5">
                    <form  action="" method="post">

                        <div class="from-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="first" class="mb-2 mr-sm-2">New Full Name</label>
                                    <input id="full" type="text" name="hovaten" class="form-control mb-2 mr-sm-2" placeholder="Full name" required>
                                </div>

                               
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" class="form-control" placeholder="Email" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please enter Email </div>
                        </div> 

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input id="pass" name="pass" type="password" class="form-control" placeholder="Password"  required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please enter your password</div>
                        </div>


                        <div class="form-group">
                            <label>Gender</label>
                            <div>
                                <input id="male" type="radio" name="gender" value="Nam">
                                <label for="male">Male</label>
                                <input id="female" type="radio" name="gender" value="Nữ">
                                <label for="female">Female</label>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="sdt">Số Điện Thoại</label>
                            <input id="sdt" type="text" class="form-control" placeholder="Số điện thoại" name="dienthoai" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please enter your phone number</div>
                        </div>
                        <div class="form-group">
                            <label for="address">Địa Chỉ</label>
                            <input id="diachi" type="text" class="form-control" placeholder="Địa Chỉ" name="diachi" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please enter your Address </div>
                        </div>

                        

                        <div class="form-group">
                            <button type="submit" name="capnhat" class="btn btn-success">Chỉnh Sửa</button>
                              <button type="button" name="back" class="btn btn-outline-success"><a href="../../index.php">Back</a></button>
                            
                        </div>
                        
                    </from>
                </div>
            </div>

        </div>
    </div>
</body>

        
</html>