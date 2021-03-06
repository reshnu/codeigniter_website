<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Techmasters &mdash; Website by Reshnu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url('')?>assets/fonts/icomoon/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />

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
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;

  padding:10px;
}
.grid-item {
 
  padding: 20px;
 
  text-align: center;
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
        <div class="site-logo mr-auto w-25"><a href="<?php echo base_url('')?>index.php/Welcome/home"><h3><b>WELCOME ADMIN</b></h3></a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="<?php echo base_url('')?>index.php/Welcome/home"class="nav-link">Home</a></li>
                <li><a href="<?php echo base_url('')?>index.php/Welcome/admin_homepage"class="nav-link ">Add Job</a></li>
                <li><a href="<?php echo base_url('')?>index.php/Welcome/admin_dashboard" class="nav-link ">List Job</a></li>
                <li><a href="<?php echo base_url('')?>index.php/Welcome/admin_messages" class="nav-link active ">Messages</a></li>
                <li><a href="#teachers-section" class="nav-link"></a></li>
                <li><a href="#teachers-section" class="nav-link"></a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
            <li class="cta"><button type="button" class=" btn btn-block btn-primary btn-pill nav-link remove"><span>Log out</span></button></li>
              </ul>
            </nav>
            
          </div>
        </div>
      </div>
      
    </header>
    <div class="intro-section single-cover" id="home-section">
      
      <div class="slide-1 " style="background-image: url('images/img_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6">
                  <h1 data-aos="fade-up" data-aos-delay="0">Messages/Compaints/Feedback</h1>
                  
                </div>

                
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5">

              
        
          

            <div class="pt-5">
              <h3 class="mb-5"><?php echo $data->num_rows()?> Message</h3>
              <ul class="comment-list">
                <li class="comment">
                <?php if($data->num_rows()>0){
                foreach ($data->result() as $row){
										?>
                  <div class="comment-body">
                    <h2><?php echo $row->first_name?> <?php echo $row->first_name?></h2>
                    
                    <div class="meta"><?php echo $row->times?>  <?php echo $row->email?></div>
                    <h4><b><?php echo $row->subject?></b></h4>
                    <p><?php echo $row->message?></p>
                    <p><a href="#" class="reply">Reply</a>  <a href="delete_message/<?php echo $row->msg_id?>" class="reply">Delete</a></p>
                  </div>
                  <?php }}?>
                </li>
              </ul>
              <!-- END comment-list -->
              

            </div>

                

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

  <script type="text/javascript">
    $(".remove").click(function(){
    
       swal({
        title: "Are you sure?",
        text: "Do You Want to Logout?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, Logout",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
             url: '<?php echo base_url('index.php/Welcome/logout')?>',
             type: 'DELETE',
             error: function() {
                alert('Something is wrong');
             },
             success: function(data) {
              var url = "<?php echo base_url('index.php/Welcome/logout')?>";
              $(location).attr('href',url);
             }
          });
        } else {
          swal("Cancelled", "Thank you for staying)", "error");
        }
      });
     
    });
    
</script>

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