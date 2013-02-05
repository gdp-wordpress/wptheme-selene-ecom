<?php get_header(); ?>
<div id="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<div class="title">
	<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
</div>
<div class="hmeta">
		<span class="author" style="display: none"> Posted by <?php the_author(); ?></span> 
		<span class="clock"> Publicado em <?php the_time('j'); echo ' de '; the_time('F'); echo ' de '; the_time('Y'); ?></span>
</div>
<div class="entry">
	<?php the_content('Read the rest of this entry &raquo;'); ?>
	<?php #include (TEMPLATEPATH . '/ad1.php'); ?>
	<div class="clear"></div>
	<?php wp_link_pages(array('before' => '<p><strong>P&aacute;ginas: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>

<div class="postmeta">
	<span class="categorys">Categorias: <?php the_category(', '); ?> </span>
</div>
</div>
<?php comments_template(); ?>
<?php endwhile; else: ?>
	<h1 class="title">N&atilde;o encontrado!</h1>
	<p>N&atilde;o encontramos a p&aacute;gina que você procura! Por favor, utilize a caixa de pesquisa no topo do site para tentar encontrar algum resultado.</p>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>