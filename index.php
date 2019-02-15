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
									<th class="cell100 column1">
										<?php echo $taula1; ?>
									</th>
									<th class="cell100 column2">
										<?php echo $taula2; ?>
									</th>
									<th class="cell100 column3">
										<?php echo $taula3; ?>
									</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">Vidal i Barraquer</td>
									<td class="cell100 column2">Tarragona</td>
									<td class="cell100 column3">FP & Bat</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Baix Camp</td>
									<td class="cell100 column2">Reus</td>
									<td class="cell100 column3">FP & Bat</td>
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

			<img src="http://websalpunt.cat/wp-content/uploads/2013/10/puntcat.png" alt="Webs Al Punt" class="websalpunt">
			<img src="http://websalpunt.cat//wp-content/uploads/2013/09/dinahosting.jpg" alt="Dinahosting" class="dinahosting">
			
			
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