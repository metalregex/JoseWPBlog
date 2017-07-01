<html>
<head>
	<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class('custom-background'); ?>>
	<h1 class="text-center heads blog-name"><?php bloginfo('name'); ?></h1>
	<p class="text-center heads blog-tagline"><?php bloginfo('description'); ?></p>
