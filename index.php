<!DOCTYPE html>

<?php 
//include("lang.php");
require_once('lang.php')
?>


<html>
<head>
	<meta charset="UTF-8">
	<title></title>

	<!-- Estilos -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="estilos/main.css" type="text/css">
	<link rel="stylesheet" href="estilos/footer-distributed.css" type="text/css">
	<!--Tabla-->
	<link rel="stylesheet" type="text/css" href="estilos/tabla/util.css">
	<link rel="stylesheet" type="text/css" href="estilos/tabla/main.css">
	<script src="js/tabla/main.js"></script>
	<!-- Fuentes -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>

<body bgcolor="#E6E6FA">

	<!-- Header -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">NotifyMe</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<!--botón menu móvil-->
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#">
							<?php echo $menu1; ?>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#">
							<?php echo $menu2; ?>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#">
							<?php echo $menu3; ?>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#">
							<?php echo $menu4; ?>
						</a>
					</li>
				</ul>
			</div>
		</div>



		<li class="nav-item dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
				<?php echo "<img src='imagenes/" . $_SESSION["idioma"] . ".png'" ?>" alt="Idioma"></a>


			<ul class="dropdown-menu" role="menu" style="min-width:0">
				<li><a href="?idioma=es"><img src="imagenes/es.png"></a>
				</li>
				<li><a href="?idioma=cat"><img src="imagenes/cat.png"></a>
				</li>
				<li><a href="?idioma=en"><img src="imagenes/en.png"></a>
				</li>
			</ul>

		</li>




	</nav>
	<div style="margin:40px"></div>

	<!-- Slider -->
	<iframe src="slider/index.html" frameborder="0" scrolling="no" width="100%" height="800px"></iframe>

	<!--tabla-->

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Class name</th>
									<th class="cell100 column2">Type</th>
									<th class="cell100 column3">Hours</th>
									<th class="cell100 column4">Trainer</th>
									<th class="cell100 column5">Spots</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">Like a butterfly</td>
									<td class="cell100 column2">Boxing</td>
									<td class="cell100 column3">9:00 AM - 11:00 AM</td>
									<td class="cell100 column4">Aaron Chapman</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Crit Cardio</td>
									<td class="cell100 column2">Gym</td>
									<td class="cell100 column3">9:00 AM - 10:00 AM</td>
									<td class="cell100 column4">Aaron Chapman</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Wheel Pose Full Posture</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">7:00 AM - 8:30 AM</td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">15</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Playful Dancer's Flow</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Zumba Dance</td>
									<td class="cell100 column2">Dance</td>
									<td class="cell100 column3">5:00 PM - 7:00 PM</td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">20</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cos-->


	<!-- Footer -->
	<footer class="footer-distributed">

		<div class="footer-right">

			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-github"></i></a>

		</div>

		<div class="footer-left">

			<p class="footer-links">
				<a href="#">
					<?php echo $menu1; ?>
				</a>
				·
				<a href="#">
					<?php echo $menu2; ?>
				</a>
				·
				<a href="#">
					<?php echo $menu3; ?>
				</a>
				·
				<a href="#">
					<?php echo $menu4; ?>
				</a>
			</p>

			<p>NotifyMe &copy; 2018</p>
		</div>

	</footer>

</body>
</html>