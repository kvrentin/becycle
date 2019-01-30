<?php include_once('_inc/config.php')  ?>

<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $description; ?>">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">

	</head>
	<body>
		<nav>
				<div class="nav-header">
					<a href="<?php echo $route['home']; ?>" class="brand">
						<img src="img/logo.png" style="width:60px;">
					</a>
						<button class="toggle-bar">
								<span class="fa fa-bars"></span>
						</button>
				</div>
				<ul class="menu">
						<li class="dropdown"><a href="<?php echo $route['about']; ?>">a propos</a>
							<ul class="dropdown-menu">
								<li><a href="#">Qui sommes-nous ?</a></li>
								<li><a href="#">Partenaires</a></li>
								<li><a href="#">Nous rejoindre</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="<?php echo $route['velo']; ?>">mon velo et moi</a>
							<ul class="dropdown-menu">
								<li><a href="#">Rouler en sécurité</a></li>
								<li><a href="#">Bien choisir son vélo</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="<?php echo $route['actu']; ?>">actualité</a>
							<ul class="dropdown-menu">
								<li><a href="#">En france</a></li>
								<li><a href="#">Dans le monde</a></li>
								<li><a href="#">Derniers décrets</a></li>
							</ul>
						</li>
						<li><a href="<?php echo $route['contact']; ?>">contact</a></li>
				</ul>
				<ul class="attributes">
				<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
				<li><a href="#"><span class="fab fa-twitter"></span></a></li>
				<li><a href="#"><span class="fab fa-instagram"></span></a></li>
				</ul>
		</nav>

	<main>
