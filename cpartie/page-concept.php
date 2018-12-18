<?php 
get_header(); 
the_post();
?>
<div class="cp-cgu row">
	<div class="col-md-12">
		<p>
			<?php the_content(); ?>
		</p>
	</div>
</div>
<?php get_footer(); ?>