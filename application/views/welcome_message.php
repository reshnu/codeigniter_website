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
                <li><a href="<?php echo base_url('')?>index.php/Welcome" class="nav-link">Home</a></li>
                <li><a href="<?php echo base_url('')?>index.php/Welcome/login" class="nav-link">Login</a></li>
                <li><a href="<?php echo base_url('')?>index.php/Welcome" class="nav-link">Sign Up</a></li>
                <li><a href="#teachers-section" class="nav-link">Buy Pro</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
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
                  <span class="mb-4"  data-aos="fade-up" data-aos-delay="200"></p>
                  <p data-aos="fade-up" data-aos-delay="300"><a href="<?php echo base_url('')?>index.php/Welcome/login" class="btn btn-primary py-3 px-5 btn-pill">Login Now</a></p>

                </div>

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <form action="<?php echo base_url('')?>index.php/Welcome/insert_data" method="post" class="form-box">
					<h3 class="h4 text-black mb-4">Sign Up</h3>
					
                    <div class="form-group">
					<label for="email">Email  <span class="redcolor">*</span></label>	
                      <input type="text" name="email" class="form-control"  value='<?php echo set_value('email'); ?>' required>
                      <?php  if(form_error('email'))
	{ 
	 echo "<p>".form_error('email')."</p>";
	} 
  ?>

					</div>
					
					<div class="form-group mb-4">
					<label for="email">Date of birth  <span class="redcolor">*</span></label>
                      <input type="date" name="dob" class="form-control" placeholder="Date Of Birth" required>
					</div>
					
					<div class="form-group mb-4">
					<label for="email">Contact Number  <span class="redcolor">*</span></label>
                      <input type="number" name="contact_number" class="form-control" value='<?php echo set_value('contact_number'); ?>' required>
                      <?php  if(form_error('contact_number'))
	{ 
	 echo "<p>".form_error('contact_number')."</p>";
	} 
  ?>
                    </div>


                    <div class="form-group">
					<label for="email">Password  <span class="redcolor">*</span></label>
                      <input type="password" id="password" name="password" class="form-control" value='<?php echo set_value('password'); ?>' onkeyup='check();'required>
                      <?php  if(form_error('password'))
	{ 
	 echo "<p>".form_error('password')."</p>";
	} 
  ?>
                    </div>
                
				
                     
				  
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Sign up">
                      <input type="reset" class="btn btn-primary btn-pill" value="Cancel">
                    </div>
                  </form>

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    
   



    

    

  

    



    <div class="site-section bg-light" id="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">


            
            <h2 class="section-title mb-3">Message Us</h2>
            <p class="mb-5"></p>
           <p class="redcolor"> <?php echo $this->session->flashdata('message')?></p>
            <form method="post" action="<?php echo base_url('')?>index.php/Welcome/message" data-aos="fade">
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input type="text" class="form-control" name="first_name" placeholder="First name" required >
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="last_name" placeholder="Last name" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject"required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Write your message here." required></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  
                  <input type="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Send Message">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    
     
    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center ">
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
