<html>
<head>
	<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class('custom-background'); ?>>
	<!-- Blog name -->
	<h1 class="text-center heads blog-name"><?php bloginfo('name'); ?></h1>
	<!-- Blog Tagline -->
	<p class="text-center heads blog-tagline"><?php bloginfo('description'); ?></p>

	<section class="wrap">
