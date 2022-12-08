<?php 

include('admin/config/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dolce far niente">
    <meta name="keywords" content="Dolce far niente, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dolce far niente</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

    <body>
         <?php 
  session_start();
 
 

if (isset($_SESSION['user']) == false) {
 
}
else{

$root = $_SESSION['user'];
// echo $root;
    }  

       
            include("Themes/header1.php");
            // include("Themes/menu.php");
            include("Themes/main1.php");
            include("Themes/footer1.php");



        ?>

        
       
        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
        <style>
  
  /* jQuery Demo */
  
  .clearfix:after {
      clear: both;
      content: "";
      display: block;
      height: 0;
    }
    .arrow-steps .step {
      font-size: 14px;
      text-align: center;
      color: #777;
      cursor: default;
      margin: 0 1px 0 0;
      padding: 10px 0px 10px 0px;
      width: 15%;
      float: left;
      position: relative;
      background-color: #ddd;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    
    .arrow-steps .step a {
      color: #777;
      text-decoration: none;
    }
    
    .arrow-steps .step:after,
    .arrow-steps .step:before {
      content: "";
      position: absolute;
      top: 0;
      right: -17px;
      width: 0;
      height: 0;
      border-top: 19px solid transparent;
      border-bottom: 17px solid transparent;
      border-left: 17px solid #ddd;
      z-index: 2;
    }
    
    .arrow-steps .step:before {
      right: auto;
      left: 0;
      border-left: 17px solid #fff;
      z-index: 0;
    }
    
    .arrow-steps .step:first-child:before {
      border: none;
    }
    
    .arrow-steps .step:last-child:after {
      // border: none;
    }
    
    .arrow-steps .step:first-child {
      border-top-left-radius: 4px;
      border-bottom-left-radius: 4px;
    }
    
    .arrow-steps .step:last-child {
      border-top-right-radius: 4px;
      border-bottom-right-radius: 4px;
    }
    
    .arrow-steps .step span {
      position: relative;
    }
    
    *.arrow-steps .step.done span:before {
      opacity: 1;
      content: "";
      position: absolute;
      top: -2px;
      left: -10px;
      font-size: 11px;
      line-height: 21px;
    }
    
    .arrow-steps .step.current {
      color: #fff;
      background-color: #5599e5;
    }
    
    .arrow-steps .step.current a {
      color: #fff;
      text-decoration: none;
    }
    
    .arrow-steps .step.current:after {
      border-left: 17px solid #5599e5;
    }
    
    .arrow-steps .step.done {
      color: #173352;
      background-color: #2f69aa;
    }
    
    .arrow-steps .step.done a {
      color: #173352;
      text-decoration: none;
    }
    
    .arrow-steps .step.done:after {
      border-left: 17px solid #2f69aa;
    }  

    

       img.cangiua {display: block; margin-left: auto; margin-right: auto;}

  </style>
    </body>
</html>