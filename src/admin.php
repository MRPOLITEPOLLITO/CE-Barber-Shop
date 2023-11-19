<?php 
  session_start();
  if (isset($_SESSION["user_id"]) && isset($_SESSION["user_email"]) && isset($_SESSION["user_name"]) && isset($_SESSION["user_level"])) {
    if(!$_SESSION["user_level"] == 'admin') {
      header("Location: ../index.php");
      exit();
    }
  } else {
    header("Location: ../index.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Haircare - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- END nav -->
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ftco-animate">
				<div class="row">
				  <div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="blog-single.html" class="block-20" style="background-image: url('images/work-1.jpg');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span></a></div>
		                </div>
		                <h3 class="heading"><a href="#">Alta de nuevos servicios</a></h3>
		                <p>Ingrese detalles como precio, descripción, nombre e imagen ilustrativa de un nuevo servicio.</p>
		                <p><a href="addService.php" class="btn btn-primary py-2 px-3">Gestionar</a></p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="blog-single.html" class="block-20" style="background-image: url('images/work-2.jpg');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a href="#"></a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span></a></div>
		                </div>
		                <h3 class="heading"><a href="#">Descarte de servicios</a></h3>
		                <p>Seleccione el servicio que desea remover, esto provocara que no este disponible nuevamente.  </p>
		                <p><a href="deleteService.php" class="btn btn-primary py-2 px-3">Gestionar</a></p>
		              </div>
		            </div>
		          </div>
		         
		         
		          
						</div>
          </div> <!-- .col-md-8 -->
          

        </div>
      </div>
    </section> <!-- .section -->
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>