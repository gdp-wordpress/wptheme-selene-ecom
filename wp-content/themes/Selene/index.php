<?php get_header(); ?>

<div id="content">

<?php if (is_home()){
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="coin-slider.js"></script>
	<link rel="stylesheet" href="coin-slider-styles.css" type="text/css" />
	<div id="games">
<? } ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php if (is_home()){
	?>
		<a href="<?php the_permalink() ?>">
			<?php the_post_thumbnail(array(545,250));?>
			<span>
				<?php the_title(); ?>
			</span>
		</a>
	<?
}else{
?>

<div class=" box <?php if (++$counter % 2 == 0) { echo "altbox"; }?>" id="post-<?php the_ID(); ?>">

<div class="cover">
<div class="title">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
<a href="<?php the_permalink() ?>">
<?php sele_post_image()?>
</a>
<div class="entry">
<?php the_excerpt(); ?> 
<div class="clear"></div>
</div>
<div class="pmeta">
	<span class="comm"><?php comments_popup_link('0 Comment', '1 Comment', '% Comments'); ?></span>	
	<div class="rmore"><a href="<?php the_permalink() ?>">Leia mais</a></div>
</div>
</div>	

</div>
<? } ?>
<?php endwhile; ?>

<?php if (is_home()){
	?>
	</div>
	
		<script>
			$('#games').coinslider();
		</script>
<? } ?>

<div class="clear"></div>
<div id="navigation">
<?php if(function_exists('wp_pagenavi')) : ?>
<?php wp_pagenavi() ?>
<?php else : ?>
        <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries','arclite')) ?></div>
        <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;','arclite')) ?></div>
        <div class="clear"></div>
<?php endif; ?>

</div>

<?php else : ?>
		<h1 class="title">Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>