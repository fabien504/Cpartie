<?php get_header(); ?>
<?php 	while (have_posts()) {
		the_post();
					?>
		<div class="col-9">
		<div class="card offset-1 col-4" style="width: 18rem;">
			  <img class="card-img-top" src="<?php echo_src_image_une(get_the_ID(),'medium') ?>";?> alt="Card image cap"^> <?php the_post_thumbnail( array(100,100)); ?>
			  <div class="card-body">
				    <h5 class="card-title"> </h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				    }
			  </div>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
							<td><?php the_excerpt(); ?></td>
							<td><a rel="lightbox" href="<?php echo get_src_image_une(get_the_id(),'medium') ?>"><?php the_post_thumbnail(array(100,100)); ?></a></td>
						</tr>
					<?php	
						}
					 ?>
			</table>
		<?php } ?>