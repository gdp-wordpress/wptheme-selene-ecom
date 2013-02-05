</div>
<div class="clear"></div>
</div>	
<div class="bottomcover ">
<div id="bottom" >
<ul>
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar("Footer") ) : ?>    
<?php endif; ?>
</ul>
<div class="clear"> </div>
</div>
</div>
<div id="footer">
	
<div class="fcred">
Copyright &copy; <?php echo date('Y');?> <a href="<?php
bloginfo('siteurl'); ?>" title="<?php bloginfo('name'); ?>"><?php
bloginfo('name'); ?></a> - <?php bloginfo('description'); ?>.<br/>
Desenvolvido por <a href="http://www.guiaosorio.com" target="_blank">Guia Os&oacute;rio</a> usando <a href="http://www.wordpress.org" target="_blank">WordPress</a>. Tema desenhado por <a href="http://www.fabthemes.com" target="_blank">FabThemes.com</a>.
</div>	

</div>
<?php wp_footer(); ?>
</body>
</html>      