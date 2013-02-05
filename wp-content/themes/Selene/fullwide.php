<?php
/*
Template Name:Fullwide
*/
?>
<?php get_header(); ?>
<div id="content" style="width:1000px; margin:0px 0px;">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<div class="post" style="width:975px; padding:10px 10px;" id="post-<?php the_ID(); ?>">
<div class="title">
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
</div>

<div class="entry">
<?php the_content('Read the rest of this entry &raquo;'); ?>
		<div class="clear"></div>
</div>


</div>

<?php endwhile; endif; ?>
</div>		


<?php get_footer(); ?>