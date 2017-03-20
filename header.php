<!DOCTYPE html>
<html>
	<head>
	<title><?php wp_title(' | ', true, 'right'); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

   <!-- start container -->
   <div class="container">
       <div>
         <div class="pull-right"> 
             <?php get_search_form(); ?>
         </div>

         <div class = "page-header">
          <h1>Some posts</h1>
         </div>
        </div>

<nav class="navbar navbar-default">
  
    <ul class="nav navbar-nav">
      <?php 
         $args = array(
           'theme_location' => 'primary'
         );
      ?>
     <?php wp_nav_menu( $args ); ?>
    </ul>
  
</nav>

