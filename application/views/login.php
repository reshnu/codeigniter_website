<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TechMasters &mdash; Website by Reshnu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url('')?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('')?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url('')?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('')?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url('')?>assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php echo base_url('')?>assets/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?php echo base_url('')?>assets/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?php echo base_url('')?>assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?php echo base_url('')?>assets/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url('')?>assets/css/style.css">
    <style>
       body {
   
   zoom: 0.8; /* Other non-webkit browsers */
   zoom: 80%; /* Webkit browsers */
}
		.redcolor{
			color:RED
		}
	</style>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
        <div class="site-logo mr-auto w-25"><a href="<?php echo base_url('')?>index.php/welcome"><h2><b>MIGRANT JOB POINT</b></h2></a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="<?php echo base_url('')?>index.php/Welcome"class="nav-link">Home</a></li>
                <li><a href="<?php echo base_url('')?>index.php/Welcome/login" class="nav-link">Login</a></li>
                <li><a href="<?php echo base_url('')?>index.php/Welcome" class="nav-link">Sign Up</a></li>
                <li><a href="#teachers-section" class="nav-link">Buy Pro</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="<?php echo base_url('index.php/welcome#contact-section')?>#contact-section" class="nav-link"><span>Contact Us</span></a></li>
              </ul>
            </nav>
            <a href="<?php echo base_url('')?>index.php/Welcome" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('<?php echo base_url('')?>assets/images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">Expert Solution for job Seekers</h1>
                  <p style="color:#D1CBC9" class="mb-4"  data-aos="fade-up" data-aos-delay="200"></p>
                  <p data-aos="fade-up" data-aos-delay="300"><a href="<?php echo base_url('')?>index.php/Welcome" class="btn btn-primary py-3 px-5 btn-pill">Sign Up Now</a></p>

                </div>

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <form action="<?php echo base_url("index.php/Welcome/login_insert")?>" method="post" class="form-box">
					<h3 class="h4 text-black mb-4">Login </h3>
				<p class="redcolor">	<?php echo $this->session->flashdata('error')?></p>
                    <div class="form-group">
                      
					<label for="email">Email  <span class="redcolor">*</span></label>	
                      <input type="text" name="email" class="form-control"  required>
					</div>
					
					


                    <div class="form-group">
					<label for="email">Password  <span class="redcolor">*</span></label>
                      <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Login">
                    </div>
                  </form>

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    
   



    

    

  

    



  
    
     
    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>TechMasters Kochi</h3>
            <p>TechMasters Kochi
2nd Floor,
Muttungal Buildings,
Vytilla, Kochi
682019</p>
          </div>

          

         

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by Techmasters Kochi</a>
        
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="<?php echo base_url('')?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url('')?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url('')?>assets/js/jquery-ui.js"></script>
  <script src="<?php echo base_url('')?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url('')?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('')?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url('')?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url('')?>assets/js/jquery.countdown.min.js"></script>
  <script src="<?php echo base_url('')?>assets/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url('')?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url('')?>assets/js/aos.js"></script>
  <script src="<?php echo base_url('')?>assets/js/jquery.fancybox.min.js"></script>
  <script src="<?php echo base_url('')?>assets/js/jquery.sticky.js"></script>

  
  <script src="<?php echo base_url('')?>assets/js/main.js"></script>
    
  </body>
</html>