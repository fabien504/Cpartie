<?php 
get_header(); 
the_post();
?>
<div class="cp-cgu row">
	<h3><?php the_title(); ?></h3>
	<div class="row">
		<div class="col-md-12">
			<p>
				<?php the_content(); ?>
			</p>
		</div>
	</div>
</div>
<?php get_footer(); ?>