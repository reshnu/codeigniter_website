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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-color:#949190">
  
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
          <div class="site-logo mr-auto w-30"><a href="<?php echo base_url('')?>index.php/welcome">Welcome Admin</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="<?php echo base_url('')?>index.php/Welcome/home"class="nav-link">Home</a></li>
                <li><a href="<?php echo base_url('')?>index.php/Welcome/admin_homepage"class="nav-link ">Add Job</a></li>
                <li><a href="<?php echo base_url('')?>index.php/Welcome/admin_dashboard" class="nav-link active">List Job</a></li>
                <li><a href="<?php echo base_url('')?>index.php/Welcome/message" class="nav-link">Messages</a></li>
                <li><a href="#teachers-section" class="nav-link"></a></li>
                <li><a href="#teachers-section" class="nav-link"></a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="<?php echo base_url('index.php/Welcome/logout')?>" class="nav-link"><span>Log out</span></a></li>
              </ul>
            </nav>
            
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      
        <div class="container">
          <div class="row align-items">
            
          
            
          <?php if($data->num_rows()>0){

foreach ($data->result() as $data){

?>

          <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data->title;?> </h5>
    <li>
     salary: <?php echo $data->minsal;?>- <?php echo $data->maxsal;?>
    </li>

    <li>
     Experience: <?php echo $data->minexp;?>yr- <?php echo $data->maxexp;?>yr
    </li>

    <li>
     Job Type: <?php echo $data->checkbox1;?> <?php echo $data->checkbox2;?>
    </li>
    <li>
     Location : <?php echo $data->dist;?>
    
    </li>
    <br>
    <br>
  <div class="row">
    <div class="col-sm">
   <a href="edit_page/<?php echo $data->job_id?>"> <button class='btn btn-outline-success'>Edit</button></a>
    </div>

    <div class="col-sm">
    <a href="<?php echo base_url('')?>index.php/Welcome/application"> <button type="button" class="btn btn-outline-success">Applications</button></a>
    </div>
  </div>



  </div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;
<?php } } ?>

        </div>
      </div>
    </div>

    
   



    

    

  

    



  
    
     
    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
          
            <h3>TechMasters Kochi</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro consectetur ut hic ipsum et veritatis corrupti. Itaque eius soluta optio dolorum temporibus in, atque, quos fugit sunt sit quaerat dicta.</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">Dashboard</a></li>
              <li><a href="#">Sign Up</a></li>

            </ul>
          </div>

          <div class="col-md-4">
            <h3>Subscribe</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt iure iusto architecto? Numquam, natus?</p>
            <form action="#" class="footer-subscribe">
              <div class="d-flex mb-5">
                <input type="text" class="form-control rounded-0" placeholder="Email">
                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by Techmasters Kochi</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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