<?php
include('db.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <!--
    Basic Page Needs
    ==================================================
    -->
   <meta charset="utf-8">
   <title>tagtel</title>
   <!--
    Mobile Specific Metas
    ==================================================
    -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <!--
    CSS
    ==================================================
    -->
   <!-- Bootstrap-->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Animation-->
   <link rel="stylesheet" href="css/animate.css">
   <!-- Morris CSS -->
   <link rel="stylesheet" href="css/morris.css">
   <!-- FontAwesome-->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <!-- Icon font-->
   <link rel="stylesheet" href="css/icon-font.css">
   <!-- Owl Carousel-->
   <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- Owl Theme -->
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <!-- Colorbox-->
   <link rel="stylesheet" href="css/colorbox.css">
   <!-- Template styles-->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file.-->
   <!--if lt IE 9
    script(src='js/html5shiv.js')
    script(src='js/respond.min.js')
    -->
</head>

<body>

   <div class="body-inner">

      <div class="site-top-2">
         <header class="header nav-down" id="header-2">
            <div class="container">
               <div class="row">
                  <div class="logo-area clearfix">
                     <div class="logo col-lg-3 col-md-12">
                        <a href="index.html">
                           <img src="images/logo1.png" alt="">
                        </a>
                     </div>
                     <!-- logo end-->
                     <div class="col-lg-9 col-md-12 pull-right">
                        <ul class="top-info unstyled">
                           <li><span class="info-icon"><i class="icon icon-phone3"></i></span>
                              <div class="info-wrapper">
                                 <p class="info-title">Our Contact</p>
                                 <p class="info-subtitle">+263784691997</p>
                              </div>
                           </li>
                           <li><span class="info-icon"><i class="icon icon-envelope"></i></span>
                              <div class="info-wrapper">
                                 <p class="info-title">Send Your Query</p>
                                 <p class="info-subtitle">info@tagtel.co.zw</p>
                              </div>
                           </li>
                           
                        </ul>
                     </div>
                     <!-- Col End-->
                  </div>
                  <!-- Logo Area End-->
               </div>
            </div>
            <!-- Container end-->
            <div class="site-nav-inner site-navigation navigation navdown">
               <div class="container">
                  <nav class="navbar navbar-expand-lg ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span></button>
                     <!-- End of Navbar toggler-->
                     <div class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                           <li class="nav-item  active"><a class="nav-link" href="#" >Home</a>
                              
                           </li>
                           <!-- li end-->
                           <li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown">Company<i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                 <li><a href="about.html">About Us </a></li>
                                 <li><a href="#team.html">Our Team</a></li>
                                 
                                 <li><a href="#faq.html">Faq</a></li>
                                 <li><a href="#gallery.html">Gallery</a></li>
                              </ul>
                           </li>
                           <!-- li end-->
                           <li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown">Products<i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                 <li><a href="vas.html">Value Added Services</a></li>
                                 <li><a href="voice.html">Voice</a></li>
                                 <li><a href="roaming.html">Roaming</a></li>
                                 <li><a href="bundles.html">Bundles</a></li>

                              </ul>
                           </li>
                           <!-- li end-->
                           <li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown">Services<i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                 <li><a href="data.html">DATA</a></li>
                                 <li><a href="voip.html">VOIP</a></li>
                                 <li><a href="volte.html">VOLTE</a></li>
                                 <li><a href="broadband.html">BROADBAND</a></li>
                                 <li><a href="sms.html">SMS</a></li>
                                 <li><a href="voice.html">VOICE</a></li>




                              </ul>
                           </li>
                           <!-- li end-->
                           <li class="nav-item "><a  href="tariffs.html">Tariffs</a>
                              
                           </li>
                           <!-- li end-->
                           <li class="nav-item dropdown">
                           <a class="nav-link" href="#" data-toggle="dropdown">
                              News
                              <i class="fa fa-angle-down"></i>
                           </a>
                              
                           </li>
                           <!-- li end-->
                           <li class="nav-item dropdown">
                                 <a href="contact.html">Contact</a>
                           </li>
                        </ul>
                        <!--Nav ul end-->
                     </div>
                     <a href="" class="top-right-btn btn btn-primary">Request a Quote</a>
                     <!-- Top bar btn -->
                  </nav>
                  <!-- Collapse end-->

                  
                  
               </div>
            </div>
            <!-- Site nav inner end-->
         </header>






<section class="quote-area solid-bg" id="quote-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <div class="quote_form">
                     <h2 class="column-title "><span>Telecommunications solutions </span>Get a Quick Quote </h2>
                     <div class="quote-img">
                        <img class="img-fluid" src="images/alltransport.png" alt="img">
                     </div>
                  </div>
                  <!-- Quote form end--> 
               </div>
               <!-- Col end-->
               <div class="col-lg-7 qutoe-form-inner-le">
                     <form class="contact-form" id="contactForm" name= "sentMessage" method="post" >
                        <h2 class="column-title "><span>Request for a Quote</span>Tell us what you want. </h2>
                        <div class="error-container"></div>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control form-name" id="name" name="name" placeholder="Full Name" type="text" required="">
                              </div>
                           </div>
                           <!-- Col end-->
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control form-name" id="phone" name="phoneNumber" placeholder="Phone Number" type="phoneNumber" required="">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control form-email" id="email" name="email" placeholder="Email" type="email" required="">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <textarea class="form-control form-message required-field" id="message" placeholder="Description" rows="8"></textarea>
                              </div>
                           </div>
                           <!-- Col 12 end-->
                        </div>
                        <!-- Form row end-->
                        <div class="text-right">
                           

                           <input type="submit" name="sub" value="Send Now" class="btn btn-primary tw-mt-30">
                        </div>
                     </form>
                     <!-- Form end-->
                     <?php
            if(isset($_POST['sub']))
            {
               $name =$_POST['name'];
               $phone = $_POST['phoneNumber'];
               $email = $_POST['email'];
               $description = $_POST['description'];
               
               $sql = "INSERT INTO `quotations`(`name`, `phoneNumber`, `email`,`description` ) VALUES ('$name','$phoneNumber','$email','description')" ;
               
               
               if(mysqli_query($con,$sql))
               echo"OK";
               
            }
            ?>
               </div>
               <!-- Col end-->
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>





          <!-- Footer start-->
      <footer class="footer" id="footer">
         <div class="footer-main bg-overlay">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-12 footer-widget footer-about">
                     <div class="footer-logo">
                        <!--<img src="images/footer-logo.png" alt="">-->
                     </div>
                     <p>Tagtel Communications is a vibrant mobile phone network company in Zimbabwe which provides fast ,reliable and affordable products and services to the people country wide </p>
                     
                     <h3 class="widget-title">Subscribe Newsletter!</h3>
                     <form class="newsletter-form" id="newsletter-form" action="#" method="post">
                        <div class="form-group">
                           <input class="form-control form-control-lg" id="newsletter-form-email" type="email" name="email" placeholder="Email "
                              autocomplete="off">
                           <button class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                        </div>
                     </form>
                  </div>
                  <!-- About us end-->
                  <div class="col-lg-4 col-md-6 footer-widget">
                     <h3 class="widget-title">Quick Links</h3>
                     <ul class="list-dash">
                      <li><a href="about.html">About Us</a></li>
                      <li><a href="data.html">Our Services</a></li>
                      
                      <li><a href="#team.html">Our Team</a></li>
                      <li><a href="#faq.html">FAQs</a></li>
                      <li><a href="#news-left-sidebar.html">News</a></li>
                      
                      
                      <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-4 col-md-6 footer-widget">
                     <h3 class="widget-title">Company Locations</h3>
                     <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i class="icon icon-map-marker2"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title">Address</h3>
                           <p>Stand 772 Prospect Harare</p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     
                     <div class="ts-contact-info last"><span class="ts-contact-icon float-left"><i class="icon icon-envelope"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title">Email Address</h3>
                           <p>info@tagtel.co.zw</p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i class="icon icon-phone3"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title">Phone Number</h3>
                           <p>+263784691997</p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                  </div>
               </div>
               <!-- Content row end-->
            </div>
            <!-- Container end-->
         </div>
         <!-- Footer Main-->
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-12">
                     <div class="copyright-info"><span>Copyright © 2022 Tagtel Communications</span></div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="footer-social text-right">
                        <ul>
                           <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="https://github.com"><i class="fa fa-github"></i></a></li>
                           <li><a href="https://instagram.com"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- Row end-->
            </div>
            <!-- Container end-->
         </div>
         <!-- Copyright end-->
      </footer>
      <!-- Footer end-->

      <div class="back-to-top affix" id="back-to-top" data-spy="affix" data-offset-top="10">
         <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i>
            <!-- icon end-->
         </button>
         <!-- button end-->
      </div>
      <!-- End Back to Top-->

      <!--
      Javascript Files
      ==================================================
      -->
      <!-- initialize jQuery Library-->
      <script type="text/javascript" src="js/jquery.js"></script>
       
       
      <!-- Bootstrap jQuery-->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!-- Owl Carousel-->
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
      <!-- Counter-->
      <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
      <!-- Waypoints-->
      <script type="text/javascript" src="js/waypoints.min.js"></script>
      <!-- Color box-->
      <script type="text/javascript" src="js/jquery.colorbox.js"></script>
       
        
      <!-- Template custom-->
      <script type="text/javascript" src="js/custom.js"></script>
