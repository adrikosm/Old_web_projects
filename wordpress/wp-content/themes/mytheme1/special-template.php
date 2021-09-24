<body>
<?php 

/*
Template Name:Special Layout
*/
get_header();

if(have_posts()){
while(have_posts()):the_post();?>

<article class="post page">

<h2> <?php the_title();?> </h2>

<!-- info box-->
<?php if(is_page(120)) { ?>
<div class="info-box">
<h4>Having trouble</h4>
<p><a href="?page_id=149">Click here for more</a></p>
</div>
<?php }  ?>
<!------------------------>

<?php the_content(); ?>


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