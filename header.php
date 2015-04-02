<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container headerContent">
      <h1>
          <?php echo bloginfo( 'name' ); ?>
        </a>
      </h1>
      <h2><?php echo bloginfo ( 'description' ); ?></h2>
      <p>Like what you see? <span><a href="#">Email Me!</a></span></p>
  </div> <!-- /.container -->
</header><!--/.header-->

