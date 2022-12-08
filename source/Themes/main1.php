 
 <div id="main">
   

            
   <?php include('right/slidebar1.php'); ?>
 
 
       <div id="left">
 
 <?php
 
 if (isset($_GET['quanly'])) {
     $temp=$_GET['quanly'];
      # code...     
  }else {
     $temp='trangchu';
      
  } 
 
 if ($temp=='dangnhap') {
 
      include("left/login1.php");
  }elseif ($temp=='dangky') {
 
      include("left/signup.php");
  }elseif ($temp=='download') {
 
 // header("left/giohang.php");
      include("left/download.php");
  }elseif ($temp=='dangxuat') {
 
      include("left/logout.php");
 
  }
 
   elseif ($temp=='trangchu') {
 
      include("right/main1.php");
  }
 
 elseif ($temp=='changepass') {
 
      include("left/changepass.php");
   }
   elseif ($temp=='thanhtoan') {
 
      include("left/thanhtoan.php");
   }
   elseif ($temp=='naptien') {
 
      include("left/naptien.php");
   }
 
  elseif ($temp=='timkiem') {
 
      include("left/search.php");
  }
 
  elseif ($temp=='nhaphattrien') {
 
      include("left/nhaphattrien.php");
  } elseif ($temp=='ungdungphobien') {
 
      include("left/phobien.php");}
       elseif ($temp=='ungdungtinhphi') {
 
  
 
      include("left/lsnaptien.php");}
      elseif ($temp=='quanlytaikhoan') {
 
      include("left/quanly.php");}
       elseif ($temp=='lichsudathang') {
 
      include("left/donhang.php");}
   
  elseif ($temp=='quanlibaiviet') {
 
     
      include("../admin/modules/quanlibaiviet/lietke.php");}
  
       elseif ($temp=='giohang') {
 
     
      include("left/giohang.php");}
      elseif ($temp=='themgiohang') {
 
     
        include("left/themgiohang.php");}
        elseif ($temp=='vanchuyen') {
 
     
            include("left/vanchuyen.php");}

            elseif ($temp=='thongtinthanhtoan') {
                include("left/thongtin.php");}

                elseif ($temp=='donhangdadat') {
 
     
                    include("left/donhangdadat.php");}
            elseif ($temp=='camon') {
             include("left/loicamon.php");}
                
             elseif ($temp=='donhangdadat') {
                include("left/donhangdadat.php");}
                elseif ($temp=='xemdonhang') {
            include("admin/modules/quanlidonhang/xemdonhang.php");}
          
  else {
      
      include("left/main.php");
  }
     
 
  
   ?>
 
 
           </div>
 
    
            </div>