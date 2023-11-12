<?php 
session_start();

if (!isset($_SESSION["user_id"]) || !isset($_SESSION["user_email"]) || !isset($_SESSION["user_name"]) || !isset($_SESSION["user_level"])) {
    header("Location: index.php");
    exit();
} else if ($_SESSION["user_level"] != 'admin') {
    header("Location: index.php");
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
	<section style="min-height: 100vh;" class="ftco-section ftco-booking bg-light">
		<div class="container ftco-relative">
			<div class="row justify-content-center pb-3">
				<div class="col-md-10 heading-section text-center ftco-animate">
					<div class="icon">
						<img style="width: 7em"
							src="https://www.pngall.com/wp-content/uploads/8/Service-Gear-PNG-Free-Download.png" alt="">
					</div>
					<h2 class="mb-4">Eliminar un Servicio</h2>
					<p>Seleccione el servicio que desea eliminar</p>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10 ftco-animate">
					<form action="querys/recordService.php" method="post" class="appointment-form"
						enctype="multipart/form-data">
						<div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select id="cars" name="service_id" class="form-control">
                                    <?php
                                    require('querys/connection.php');
                                    $query = "SELECT service_id, service_name, service_description, service_cost FROM service";
                                    $result = $conn->query($query);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo $row['service_id'] ?>"><?php echo $row['service_id'], " - ", $row['service_name'] ?></option>
                                        <?php
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                                </div>
                            </div>
						</div>
						<div class="form-group">
							<input type="submit" value="Eliminar" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


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
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>