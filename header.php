<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whalewatch
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/13d5cd372a.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site bg-light">
<!-- NAVBAR -->
	<nav class="navbar navbar-expand-md fixed-top bg-light d-flex">
		<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<img class="img-fluid" width="28" height="28" src="https://static.thenounproject.com/png/2103263-200.png">
		</button>
		<div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
			<a class="navbar-brand" href="#"><img class="img-fluid" width="28" height="28" src="https://static.thenounproject.com/png/2103263-200.png"> Prep Meals</a>
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Meal Plans</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Balanced</a>
						<a class="dropdown-item" href="#">Keto</a>
						<a class="dropdown-item" href="#">Paleo</a>
						<a class="dropdown-item" href="#">Vegan</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#prices">Menu Items</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#howitworks">How it Works</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Get Started</a>
				</li>
			</ul>
		</div>
	</nav>