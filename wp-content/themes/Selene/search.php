<?php get_header(); ?>

<div id="content" class="scover" >

<div class="shead" >
<div id="searchpage">
	<form method="get" id="searchpageform" action="<?php bloginfo('home'); ?>" >
	<input id="sform" class="rounded" type="text" name="s" onfocus="if(this.value=='search site'){this.value=''};" onblur="if(this.value==''){this.value='search site'};" value="<?php echo wp_specialchars($s, 1); ?>" />
	<input id="formsubmit" type="submit" value="Search" />
	</form>
</div>
<p style="margin-top:5px">
<?php
$mySearch =& new WP_Query("s=$s & showposts=-1");
$num = $mySearch->post_count;
echo $num.' search results for '; the_search_query();
?> in <?php  get_num_queries(); ?> <?php timer_stop(1); ?> seconds.
</p>
</div>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">


<div class="title">
	<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
</div>
<div class="hmeta">
		<span class="author"> Posted by <?php the_author(); ?></span> 
		<span class="clock"> On <?php the_time('F - j - Y'); ?></span>
</div>

<div class="entry">
<div style="width:120	px; float: left; margin-right: 10px;">
<? the_post_thumbnail('thumbnail'); ?>
</div>			
<?php the_excerpt(); ?> 
	<div class="clear"></div>
</div>

<div class="postmeta">
	<span class="categorys">Categories: <?php the_category(', '); ?> </span>
</div>

</div>
	<?php endwhile; ?>

 <div id="navigation">
<?php
if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
?>
</div>
	<?php else : ?>




<div class="entry">

<b>Sua pesquisa - <?php the_search_query();?> - nenhum resultado encontrado...</b>

<p>Por favor, use outros termos.</p>
			
</div>

<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
