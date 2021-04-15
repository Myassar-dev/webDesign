<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Web_Design
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> style="margin-top: 0 !important;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Web Design</title>
	 <!-- font -->
	 <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	 <!-- <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> -->
	 <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
	 <!-- bootstrap -->
	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
	 <!-- font-awesome 5 -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	 <link href="<?php bloginfo('template_directory') ?>/css/myStyles.css" rel="stylesheet" />

	<?php wp_head(); ?>
</head>

<body class="topBackground">
	<div class="container">
	 <nav class="navbar navbar-expand-lg navbar-light  ">
		 <a class="navbar-brand" href="#"><strong>Web</strong> Design</a>

		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			 <span class="navbar-toggler-icon"></span>
		 </button>

		 <div class="collapse navbar-collapse" id="navbarSupportedContent">
			 <ul class="navbar-nav  ml-auto">
				 <li class="nav-item active">
					 <a class="nav-link" href="#">Home</a>
				 </li>
				 <li class="nav-item">
					 <a class="nav-link" href="#">News</a>
				 </li>
				 <li class="nav-item">
					 <a class="nav-link" href="#">Downloads</a>
				 </li>
				 <li class="nav-item">
					 <a class="nav-link btn btn-orange" href="#">LOG IN</a>
				 </li>

			 </ul>
		 </div>
	 </nav>
</div>
