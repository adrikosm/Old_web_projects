<article class="post post-aside">
<p class="mini-meta">
 <a href="<?php 
 echo get_author_posts_url(get_the_author_meta('ID')); ?>">
<?php the_author(); ?> 
</a>:
<?php the_time('F jS,Y');?>
| Posted in
<?php 
$categories = get_the_category();
$separator=",";
$output='';

if($categories){
foreach ($categories as $category){
	$output.='<a href="'. get_category_link($category->term_id).'">' . $category->cat_name .'</a>' 
	. $separator;
}
echo trim($output,$separator);

}
?>
</p>
<?php   the_content();  ?>

 </article>
