<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">

	<title>Anwen Williams Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:600,700|Megrim|Open+Sans:300,400,500,600,700" rel="stylesheet">

	<?php wp_head(); ?>

</head>

<body>

	<div id="site-wrapper">

		<header role="banner">

			<div class="title">
				<h1><a href="<?php bloginfo('url'); ?>">Anwen W</a></h1>
	      <h2>Coding, doodling and codebar Brighton</h2>
			</div>

			<nav role="navigation">

				<!-- To rename default class/IDs for menu, replace this with below array: -->
				<!-- <?php wp_nav_menu(); ?> -->

				<?php wp_nav_menu(array(
					'menu_class' => 'main-nav',
					'menu_id' => 'nav',
					'theme_location' => 'primary',
					'container' => ''
				));?>

				<!-- <?php wp_nav_menu(array('theme_location'=>'primary'));?> -->

			</nav>

		</header>

		<main class="content" role="main">
