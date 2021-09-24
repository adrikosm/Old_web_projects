<!DOCTYPE html>
<html <?php language_attributes();?> >

<head>

<meta charset="<?php bloginfo('charset');?>">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link 
  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link 
  href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link 
  href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script
  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title><?php bloginfo('name');?></title>
<?php wp_head(); ?>
 
</head>

<body <?php body_class();?> >

<div class="container">

<div class="parallax"></div>


<!--  site header-->
<header class="site-header">

<!--header widget-->
<div class="header-widgets clearfix">
<?php if(is_active_sidebar('header1') ): ?>
<div class="footer-widget-area">
<?php dynamic_sidebar('header1');?>
</div>
<?php endif;?>

</div><!--/header widget-->
<!-- hd-search -->
<div class="hd-search">
<?php get_search_form(); ?>
</div><!-- hd-search -->

<h1>
<a href="<?php echo home_url();?>">
<?php bloginfo('name'); ?>
 </a>
</h1>



<h5>
<?php if(is_page(103)){?>
	thank you for for viewing our work
<?php } else if(is_page(124)) { ?>
Thank you for viewing our additional info
<?php } else if(is_page(137)){?>
Hitler's portofolio 
<?php }else{
 bloginfo('description'); 
 }?>	

</h5>






<nav class="site-nav">
<?php
$args=array(
'theme_location'=>'primary'
);
?>
<?php wp_nav_menu( $args ); ?>

</nav>


</header><!-- site header-->