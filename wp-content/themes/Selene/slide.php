<script type="text/javascript">
jQuery(function() {
jQuery("#featureCarousel").featureCarousel({
smallFeatureWidth:      .6,
smallFeatureHeight:  .6,
topPadding:             60,
		   
});
});
</script>
<div id="headbox">
<div id="slide">
<div class="shadetop"></div>

<div class="shadebot"></div>
<div id="slidebox">
<div id="slidecover">
<div id="featureCarousel">

<?php 
	$gldcat = get_option('sele_gldcat'); 
	$gldct = get_option('sele_gldct');
	$my_query = new WP_Query('category_name='.$gldcat.'&showposts='.$gldct.'');
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
 
 	<div class="feature">
	<a href="<?php the_permalink() ?>"> <?php sele_slide_image() ?> </a>
	<div><p><?php the_title(); ?></p></div>
	</div>   

<?php endwhile; ?>

</div>
</div>
</div>
</div>
</div>