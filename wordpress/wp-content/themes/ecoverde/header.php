<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ecoverde - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php
	wp_head();
	?>
</head>
<body <?php body_class();?>>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="index.html">Ecoverde</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>

		<div class="collapse navbar-collapse" id="ftco-nav">
			<?php
			wp_nav_menu([
				'theme_location' => 'header',
				'container' => false,
				'menu_class' => 'navbar-nav ml-auto',
			]);
			?>
<!--			<ul class="navbar-nav ml-auto">-->
<!--				<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>-->
<!--				<li class="nav-item"><a href="properties.html" class="nav-link">Properties</a></li>-->
<!--			</ul>-->
		</div>
	</div>
</nav>