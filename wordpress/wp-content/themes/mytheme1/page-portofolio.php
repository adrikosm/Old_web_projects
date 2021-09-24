<body>
<?php 

get_header();

if(have_posts()){
while(have_posts()):the_post();?>
<article class="post page">
<!--column container-->
<div class="column-container clearfix">

<div class="title-column"><!--title container-->
<h2><?php the_title(); ?></h2>
</div><!--/title-->


<div class="text-column"><!--text-container-->
<?php the_content(); ?>
</div><!--/text-->

</div><!--/column-->
</article>



<?php
endwhile;
}
else{
	
	echo "<p>"."No content found"."</p>";
}

get_footer();
?>
</body>