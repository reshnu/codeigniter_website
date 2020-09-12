<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TechMasters &mdash; Website by Reshnu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

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
        <div class="site-logo mr-auto w-20"><a href="<?php echo base_url('')?>index.php/welcome/home"><h3><b>WELCOME ADMIN</b></h3></a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="<?php echo base_url('')?>index.php/Welcome/home"class="nav-link">Home</a></li>
                <li><a href="<?php echo base_url('')?>index.php/Welcome/admin_homepage"class="nav-link ">Add Job</a></li>
                <li><a href="<?php echo base_url('')?>index.php/Welcome/admin_dashboard" class="nav-link active">List Job</a></li>
                <li><a href="<?php echo base_url('')?>index.php/Welcome/admin_messages" class="nav-link  ">Messages</a></li>
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

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('<?php echo base_url('')?>assets/images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">Edit Job </h1>
                  <p style="color:#949190"class="mb-4"  data-aos="fade-up" data-aos-delay="200"></p>
                  

                </div>

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                <?php if($data->num_rows()>0){
                foreach ($data->result() as $row){
										?>
                  <form action="<?php echo base_url('')?>index.php/Welcome/update_job" method="post" class="form-box">
					
					
                    <div class="form-group">
					<label for="email">Job Title  <span class="redcolor">*</span></label>	
                      <input type="text" name="title" value="<?php echo $row->title?>" class="form-control" placeholder="<?php echo $row->title?>" >
					</div>
					
					<div class="form-group">
					<label for="job Type">Job Type  <span class="redcolor">*</span></label>	<br>
                    <div class="form-check form-check-inline">
                       <input class="form-check-input" name="checkbox1"type="checkbox" id="inlineCheckbox1" value="Full time" >
                        <label class="form-check-label" for="inlineCheckbox1">Full Time</label>
                      </div>
                      <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox"name="checkbox2" id="inlineCheckbox2" value="Part Time">
                      <label class="form-check-label" for="inlineCheckbox2">Part Time</label>
                      </div>


					</div>

                    <div class="form-group">
                    <label for="email">Role  <span class="redcolor">*</span></label>	
                    <input type="text" name="role" value="<?php echo $row->role?>" class="form-control" placeholder="<?php echo $row->role?>" list="job" />
<datalist id="job">
  <option value="Room Boy">Room Boy</option>
  <option value="House Keeping">House Keeping </option>
  <option value="Chef">chef</option>
  <option value="Cleaner">Cleaner</option>
</datalist>
</div>



<div class="form-group">
                    <label for="email">District  <span class="redcolor">*</span></label>	
                    <input type="text" name="dist" value="<?php echo $row->dist?>" class="form-control" placeholder="<?php echo $row->dist?>" list="dist" />
<datalist id="dist">
  <option>Thiruvanathapuram</option>
  <option>Kollam</option>
  <option>Pathanamthitta</option>
  <option>Alapuzha</option>
  <option>Kottayam</option>
  <option>Idukki</option>
  <option>Ernakulam</option>
  <option>Thrissur</option>
  <option>Palakkad</option>
  <option>Malappuram</option>
  <option>Wayanad</option>
  <option>Kozhikodu</option>
  <option>Kannur</option>
  <option>Kasargod</option>
</datalist>
</div>

<div class="form-group">
<label for="email">Monthly Salary  <span class="redcolor">*</span></label>	
<div class="form-row">
    <div class="col">
      <input type="text" name="minsal" value="<?php echo $row->minsal?>" class="form-control" placeholder="<?php echo $row->minsal?>">
    </div>
    <div class="col">
      <input type="text" name="maxsal" value="<?php echo $row->maxsal?>" class="form-control" placeholder="<?php echo $row->maxsal?>">
    </div>
  </div>
  </div>


<div class="form-group">
<label for="email">Experience  <span class="redcolor">*</span></label>	
<div class="form-row">
    <div class="col">
      <input type="text" name="minexp" value="<?php echo $row->minexp?>" class="form-control" placeholder="<?php echo $row->minexp?>">
    </div>
    <div class="col">
      <input type="text" name="maxexp" value="<?php echo $row->maxexp?>" class="form-control" placeholder="<?php echo $row->maxexp?>">
    </div>
  </div>
  </div>





                    <div class="form-group">
					<label for="email">Job Description  <span class="redcolor">*</span></label>
                      <input type="text" name="jobdesc"  value="<?php echo $row->jobdesc?>" class="form-control" placeholder="<?php echo $row->jobdesc?>">
                    </div>
                    <input type="hidden" name="job_id" value="<?php echo $row->job_id?>">
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Save">
                      <a href="<?php echo base_url('index.php/Welcome/delete_job')?>/<?php echo $row->job_id?>" class="btn btn-warning btn-pill">Delete</a>
                    </div>
                  </form>
                <?php } }?>
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