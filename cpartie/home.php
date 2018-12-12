<?php get_header(); ?>
<div class="row cp-home">	
	<div class="col-12 bghome">
		<div class="hover">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nesciunt rem exercitationem ratione est, mollitia a veritatis maiores temporibus quibusdam ipsa, obcaecati pariatur unde impedit quas. Omnis, voluptas quam maxime?
			<a href=""><span class='bouton-participe'>Je participe !</span></a>
		</div>
	</div>
</div>
<div class="row ">
	<div class="col-12 reseau">
		<p>Trouver une partie, un événement...</p>
		<form action="">
			<select name="typedejeu" id="">
				<option hidden disabled selected>par type de jeu...:</option>
				<option value="b">bv</option>
				<option value="v">cvb</option>
			</select>
			<select name="lieu" id="">
				<option hidden disabled selected>par lieu...:</option>
				<option value="b">ets</option>
				<option value="v">redh</option>
			</select>
			<select name="date" id="">
				<option  hidden disabled selected>par date...:</option>
				<option value="b">ds</option>
				<option value="v">sd</option>
			</select>
			<button class='bouton-cpartie'>
				C PARTIE
			</button>
		</form>
	</div>
</div>
<div class="row ">
	<div class="col-12 reseau">
		<h3>Les derniers événements</h3>
		<?php do_action('slideshow_deploy', '77'); ?>
	</div>
</div>
<div class="row v">
	<div class="col-12 reseau">
		<h3>Rejoignez-nous !</h3>
		<img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="facebook">
		<img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="twitter">
		<img src="<?php bloginfo('template_url'); ?>/images/insta.png" alt="instagram">
	</div>
</div>


<?php get_footer(); ?>