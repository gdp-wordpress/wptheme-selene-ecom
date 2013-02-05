<?php get_header(); ?>
<div id="content" >

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<div class="post " id="post-<?php the_ID(); ?>">
<div class="title">
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
</div>

<div class="entry">
<?php the_content('Veja mais &raquo;'); ?>
<div class="clear"></div>
</div>

</div>

<?php endwhile; endif; ?>
</div>		

<?php get_sidebar(); ?>
<?php get_footer(); ?>