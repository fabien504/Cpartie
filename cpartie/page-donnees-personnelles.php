<?php 
get_header(); 
the_post();
?>
<div class="cp-dp row">
	<div class="col-md-12">
		<p>
			<?php the_content(); ?>
		</p>
	</div>
	<img src="<?php bloginfo('template_url')?>/images/cookie.gif" alt="cookie qui court">
</div>
<?php get_footer(); ?>