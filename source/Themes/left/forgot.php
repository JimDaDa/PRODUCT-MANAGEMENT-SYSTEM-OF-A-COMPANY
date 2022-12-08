<?php
session_start();

include('../../admin/config/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quên Mật Khẩu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<?php 
if (isset($_POST['send']) && $_POST['email'] !='') {
	$email=$_POST['email'];
	 $sql_check ="SELECT * from tbl_dangky where email='".$email."' ";
    $query=mysqli_query($mysqli,$sql_check);
   

if (mysqli_num_rows($query) >0 ) {
	// nếu email tồn tại sẽ chuyển đến trang reset password 
	 echo '<p style="color:green">Email tồn tại </p>';
	 header('Location:resetpass.php');
	# code...
}else{

	 echo '<p style="color:red">Email không tồn tại </p>';
}

}





	 ?>
   

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <h3 class="text-center text-secondary mt-5 mb-3">Forgot password</h3>
                <form action="" method="POST" class="border rounded w-100 mb-5 mx-auto px-3 pt-3 bg-light">
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input name="email" id="username" type="email" class="form-control" placeholder="Email">
                    </div>
                   
                    <div class="form-group">
                       
                       
                        <button type="submit" class="btn btn-primary px-5" name="send">Send</button>
                    </div>
                   
                </form>

            </div>
        </div>
    </div>

</body>

</html>