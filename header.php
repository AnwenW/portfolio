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
	      <h2>Coding, doodling & codebar&nbsp;Brighton</h2>
			</div>

			<nav role="navigation" class="nav-menu-group">

				<a href="#" class="navicon">
          <i></i>
          <i></i>
          <i></i>
        </a>

				<?php wp_nav_menu(array(
					'menu_class' => 'main-menu',
					'menu_id' => 'nav',
					'theme_location' => 'header-menu',
					'container' => ''
				));?>

			</nav>

		</header>

		<main class="content" role="main">
