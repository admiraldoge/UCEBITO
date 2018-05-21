<?php
include_once "includes/init.php";
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>UCBITO</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">

		
		<link rel="stylesheet" href="assets/css/estilo.css">
		<link rel="stylesheet" href="assets/css/font-awesome.css" type="text/css">
		<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
		<script src="js/popper.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="assets/js/custom.js"></script>
	</head>
	<body>
	<div class="container">
		<nav class="navbar-expand-lg navbar-dark navbar-fixed-top navbar-custom" id="mainNav">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-5 columna">
					<a class="navbar-brand" href="usuario.php"><img src="img/logo2.png" height="50"></a>
				</div>
				<div class="col-7 columna">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          		<span class="navbar-toggler-icon"></span>
        		</button>
					<div class="collapse navbar-collapse" id="navbarResponsive">
          				<ul class="navbar-nav ml-auto">
            			<li class="nav-item">
              				<a class="nav-link js-scroll-trigger" href="#problems"><h5>Problemas</h5></a>
            			</li>
            			<li class="nav-item">
              				<a class="nav-link js-scroll-trigger" href="enter.php">
              					<h5>
              					<?php
              						echo get_name($_SESSION['email']);
              					?>
              					</h5>
              				</a>
            			</li>
            			<li class="nav-item">
            				<h5>
              				<a class="nav-link js-scroll-trigger" href="logout.php">Salir</a>
              				</h5>
            			</li>
          				</ul>
        			</div>
				</div>
			</div>
		</div>
		</nav>