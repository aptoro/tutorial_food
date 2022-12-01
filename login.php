<?php
session_start();
error_reporting(1);
$i=$_REQUEST['img'];
include("connection.php");
if(isset($_POST['log']))
{ if($_POST['id']=="" || $_POST['pwd']=="")
{ $err="fill your id and password first"; }
else 
{$d=mysqli_query($connect, "select * from register where email='{$_POST['id']}' ");
$row=mysqli_fetch_object($d);
$fid=$row->email;
$fpass=$row->password; 
if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
{$_SESSION['sid']=$_POST['id'];
//echo"<script>location:href='order.php?img=$i'</script>";
header("location:order.php?img=$i"); 
}
else {$err=" your password is not"; }}
}
?>
<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Aptoro's Food Order & Delivery</title>

        <!-- CSS FILES -->    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">                    
        <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-icons.css" rel="stylesheet">
         <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
		 

        <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">
        
<!--

Tooplate 2129 Crispy Kitchen

https://www.tooplate.com/view/2129-crispy-kitchen

-->
    </head>
    
    <body>
        
        <nav class="navbar navbar-expand-lg bg-white shadow-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
               <h1 align="center">Aptoro's Food Order & Delivery</h1>

                <div class="d-lg-none">
                    <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Reservation</button>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link active" href="menu.php">Menu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

            </div><!-- end of tooplate_menu -->
        </nav><!-- END of header -->
			
			<div id="tooplate_main">
    	
       <div id="contact_form" class="col_2">
                <h1 align="center">User Log In</h1>
                <form method="post" name="contact" action="#" align="center">
                      <div class="col_4">
                        <label for="phone">User Email:</label>
                        <input type="email" id="id" name="id" class="required input_field" />
                    </div>
                    <div class="col_4">
                        <label for="email">Password:</label>
                        <input type="password" id="pwd" name="pwd" class="validate-email required input_field" />
                    </div>
              
                     
                    <div class="clear"></div>
                    
                     <input type="submit" name="log"  value="Log in" class="submit_button" />
                </form>
				<h2><?php echo $err;?></h2>
            </div>    	
       
        
        

        <div class="clear"></div>
    </div>
    <div style="display:none;" class="nav_up" id="nav_up"></div>
</div> <!-- END of tooplate_wrapper -->z

			<footer class="site-footer section-padding">
            
            <div class="container">
                
                <div class="row">

                    <div class="col-12">
                        <h4 class="text-white mb-4 me-5">By Aptoro</h4>
                    </div>

                    <div class="col-lg-4 col-md-7 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Location</h6>

                        <p>No 1209, Nya yat kwat,Thunandar Road</p>

                        <a href="https://goo.gl/maps/wZVGLA7q64uC1s886" class="custom-btn btn btn-dark mt-2">Directions</a>
                    </div>

                    <div class="col-lg-4 col-md-5 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Opening Hours</h6>

                        <p class="mb-2">Monday - Sun</p>

                        <p>8:00 AM - 08:00 PM</p>

                        <p>Tel: <a href="tel: 010-02-0340" class="tel-link">09971393829</a></p>
                    </div>

                    <div class="col-lg-4 col-md-6 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Social</h6>

                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="https://twitter.com/search?q=tooplate.com&src=typed_query&f=live" target="_blank"
                            	 class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    
                        <p class="copyright-text tooplate-mt60">Copyright © 2022 Aptoro Company,Ltd
                        <br>Design: <a rel="nofollow" href="https://www.tooplate.com/" target="_blank">Tooplate</a></p>
                        
                    </div>

                </div><!-- row ending -->
                
             </div><!-- container ending -->
             
        </footer>
      
       <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>

		
    </body>
</html>