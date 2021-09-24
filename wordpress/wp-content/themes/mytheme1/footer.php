<!--site-footer-->
<footer class="site-footer">
<!--footer widgets-->

<div class="footer-widgets clearfix">
<?php if(is_active_sidebar('footer1')):?>
<div class="fotter-widget-area">
<?php dymanic_sidebar('footer1');?>
<div>
<?php endif; ?>
</div><!--/footer widgets-->


<nav class="site-nav pull-left">

<?php
//footer menu
$args=array(
'theme_location '=> 'footer'
);
?>

<?php wp_nav_menu( $args ); ?>
</nav>
<p><?php bloginfo('name');?> &copy; 
<?php echo date('Y');?></p>

</footer>

</div><!--Container div-->

<?php wp_footer(); ?>

</body>
</html>