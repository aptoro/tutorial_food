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
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

            </div><!-- end of tooplate_menu -->
        </nav><!-- END of header -->
		
          <main>
		            
            <header class="site-header site-contact-header">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <h1 class="text-white">Say Hi</h1>

                            <strong class="text-white">We are happy to get in touch with you</strong>
                        </div>

                    </div>
                </div>
                
                <div class="overlay"></div>
            </header>  
		      
		  			 <section class="contact section-padding">
                <div class="container">
				<?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$phone=$_POST['t3'];
$mesg=$_POST['t4'];
if(mysqli_query($connect , "insert into contact(name,email,phone,mesg) values('$name','$email','$phone','$mesg')"))
{$er="<font color='red' size='+1'>  Your Message sent successfully</font>"; }
}

?>
 <div class="row">

                        <div class="col-12">
                            <h2 class="mb-4" align="center">Contact Form Information</h2>
                        </div>

                        <div class=" col-12">
                            <form class="custom-form contact-form row" action="#" method="post" role="form" align="center">
                                <div class="col-lg-6 col-6">
                                    <label for="contact-name" class="form-label">Full Name</label>

                                    <input type="text" name="t1" id="t1" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <label for="contact-phone" class="form-label">Phone Number</label>

                                    <input type="telephone" name="t3" id="t3"  class="form-control" placeholder="YourPhoneNumber">
                                </div>

                                <div class="col-12">
                                    <label for="contact-email" class="form-label">Email</label>

                                    <input type="email" name="t2" id="t2" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Your Email" required="">

                                    <label for="contact-message" class="form-label">Message</label>

                                    <textarea class="form-control" rows="5" id="t4" name="t4" placeholder="Your Message"></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" name="sub" id="sub" value="send" class="submit_button">Send</button>
                                </div>
                            </form>
							<h2><?php echo $er;?></h2>
                        </div>
			
			
           
			
			</main>
			
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