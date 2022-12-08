


<?php 

include('../../admin/config/config.php');


if (isset($_POST['changepass'])) {
    # code...
    $taikhoan=$_POST['username'];
    $matkhau_old=$_POST['old_pass'];
      $matkhau_new=$_POST['new_pass'];
    $sql= "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' and matkhau='".$matkhau_old."' limit 1";
    $row=mysqli_query($mysqli,$sql);
    $count=mysqli_num_rows($row);
    if ($count >0) {

$change=mysqli_query($mysqli,"UPDATE tbl_dangky SET  matkhau='".$matkhau_new."'WHERE email='".$taikhoan."' and matkhau='".$matkhau_old."' ");
    
    
        echo "<p style='color:green'>Bạn đã đổi mật khẩu thành công</p>";

        header("Location: ../../index.php");
       
       
    }else{
        echo "<p style='color:red'>Mật khẩu cũ và tài khoản vui lòng không trùng </p>";
         
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đổi mật khẩu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  

</head>
<body>


<div class="container">
    <h3 class="mt-5 mb-3 text-center text-primary">Change Password</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="myForm" class="border p-3 rounded" method ="post" action="" autocomplete="off"  >
                <div class="form-group">
                    <label for="text">Email</label>
                    <input type="email" class="form-control" id="username" placeholder="Enter email" name="username">
                </div>
                <div class="form-group">
                    <label for="pwd">Old Password:</label>
                    <input type="password" class="form-control" id="pass" placeholder="Enter password" name="old_pass">
                </div>
                <div class="form-group">
                    <label for="pwd">New Password:</label>
                    <input type="password" class="form-control" id="pass" placeholder="Enter password" name="new_pass">
                </div>
               
                <div style="display: none " class="errorMessage my-3" id="errorMessage">Please enter username.</div>
                <button class="btn btn-primary" name="changepass" type="submit" class="btn btn-default">Change Password</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
