<?php
error_reporting(1);
session_start();
$i=$_REQUEST['img'];
$_SESSION['sid']=$_POST['id'];
include("connection.php");
$i=$_REQUEST['img'];
if($_POST['ord'])
{ 
$prodno=$_POST['prodno'];
$price=$_POST['price'];
$name=$_POST['nam'];
$phone=$_POST['pho'];
$add=$_POST['add'];
$ordno=ord.rand(100,500);
if(mysqli_query($connect, "insert into orders(productno,price,name,phone,address,order_no) values('$prodno','$price','$name','$phone','$add','$ordno')"))
{
//echo "<script>location.href='ordersent.php?prod'</script>";
header("location:ordersent.php?order_no=$ordno");  }
else {$error= "user already exists";}}

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
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">Menu</a>
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
			<div class="container">  <h3 align="center">Order form</h3>
        <?php
			include("connection.php");
			$sel=mysqli_query($connect, "select * from menu  where img='$i' ");
			$mat=mysqli_fetch_array($sel);
			
			
			?>
                            <form  method="post" align="center">
                                <div class="col-12">
                                    <label for="order-proudno" class="form-label">Proud No</label>

                                    <input type="text" type="text" name="prodno" id="prodno" value="<?php echo $mat['prod_no'];?>" class="input_field">
                                </div>

                                <div class="col-12">
                                    <label for="order-price" class="form-label">Price</label>

                                    <input type="text" name="price" id="price" value="<?php echo $mat['price'];?>" class="input_field">
                                </div>

                                <div class="col-12">
                                    <label for="order-name" class="form-label">Name</label>

                                    <input type="text" name="nam" id="nam" class="input_field" placeholder="Your Name">
									
                                  <div class="col-12">
                                    <label for="order-phone" class="form-label">Phone</label>
									
					                <input type="text" name="pho" id="pho" class="input_field" placeholder="Phone">
                                  </div>
								   <div class="col-12">
                                    <label for="order-address" class="form-label">Address</label>
									 
									 <textarea id="add" name="add" rows="0" cols="0" class="required"></textarea>
                                  </div>
                                   
								     <input type="submit" name="ord" id="ord" value="sent order" class="submit_button" />
				                     <input type="submit" name="Cancel" value="Cancel" class="submit_button" />
                            </form>
							<h2><?php echo $er;?></h2>
                        </div>
</div>
    	<div id="tooplate_content" class="left">
          <div id="comment_form">
          
            
        
        </div>  
            
            
            
            
            
            
        </div> <!-- END of content -->
                
		
            
           
      </div>
       
	    
			
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