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


    
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  margin-left:150px;
  text-decoration: none;
  font-size: 17px;
}
.topnv a{
  overflow: hidden;
  background-color: #333;
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
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
   
    
    <header>
      
    <div class="topnv" id="myTopnav">
  <a href="<?php echo base_url('')?>index.php/Welcome/admin_homepage" class="">Welcome Admin</a>
</div>
<div class="topnav" id="myTopnav">
  <a href="<?php echo base_url('')?>index.php/Welcome/admin_homepage">Home</a>
  <a href="<?php echo base_url('')?>index.php/Welcome/admin_dashboard">Dashboard</a>
  <a href="">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
      
    </header>

    <section>
  <!--for demo wrap-->
  <h1>Fixed Table header</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Date</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>job id</th>
          <th>Job Title</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php if($applied->num_rows()>0) { 
          foreach ($applied->result() as $row){

            ?>
         
        <tr>
          <td><?php echo $row->times?></td>
          <td><?php echo $row->email?></td>
          <td><?php echo $row->contact_number?></td>
          <td><?php echo $row->job_id?></td>
          <td><?php echo $row->title?></td>
          <td><a href="add/<?php echo $row->apply_id?>"><button class="btn btn-success">Add</button></td></a>
          <td><a href="remove/<?php echo $row->apply_id?>"><button class="btn btn-danger">Remove</button></td></a>
          <td><a href="messageadmin/<?php echo $row->reg_id?>"><button class="btn btn-primary">Message</button></td></a>
        </tr>
          <?php }}?>
      </tbody>
    </table>
  </div>
</section>
    
   



    

    

  

    



  
    
     
    
  
    
  </div> <!-- .site-wrap -->
<script>
  // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
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