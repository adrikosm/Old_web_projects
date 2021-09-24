<body>
<?php 
get_header();
?>
<!--Site content -->
<div class="site-content clearfix">


<!--main class-->
<div class="main-column">

<?php
if(have_posts()){
while(have_posts()):the_post();


get_template_part('content',get_post_format());

endwhile;
}
else{
	
	echo "<p>"."No content found"."</p>";
}
?>
</div><!--/main class-->

<?php get_sidebar();?>

</div><!--/Site content -->





<?php
get_footer();
?>
</body>