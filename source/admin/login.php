<?php 
session_start() ;
include('config/config.php');
if (isset($_POST['dangnhap'])) {
    # code...
    $taikhoan=$_POST['username'];
    $matkhau=md5($_POST['pass']);
    $sql= "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' and pass='".$matkhau."' limit 1";
    $row=mysqli_query($mysqli,$sql);
    $count=mysqli_num_rows($row);
    if ($count >0) {
        # code...
        $_SESSION['dangnhap']=$taikhoan;
        echo "<p style='color:green'>Bạn đã đăng nhập thành công</p>";
        
        header("Location:index.php");
    }else{
         echo "<p style='color:green'>Tài khoản không đúng </p>";
        
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng nhập</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  

</head>
<body>


<div class="container">
    <h3 class="mt-5 mb-3 text-center text-primary">Admin Login</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="myForm" class="border p-3 rounded" method ="post" action="" autocomplete="off"  >
                <div class="form-group">
                    <label for="text">User Name</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
                </div>
                <div style="display: none " class="errorMessage my-3" id="errorMessage">Please enter username.</div>
                <button class="btn btn-primary" name="dangnhap" type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
