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
				<option hidden disabled selected>par type de jeu...</option>
				<option value="b">bv</option>
				<option value="v">cvb</option>
			</select>
			<select name="lieu" id="">
				<option hidden disabled selected>par lieu...</option>
				<option value="b">ets</option>
				<option value="v">redh</option>
			</select>
			<select name="date" id="">
				<option  hidden disabled selected>par date...</option>
				<option value="b">ds</option>
				<option value="v">sd</option>
			</select>
			<button class='bouton-cpartie'>
				C PARTIE
			</button>
		</form>
	</div>
</div>
<div class="row">
	<div class="col-12 slider">
		<h3>Les derniers événements</h3>
		<div class="display-container">
			<div class="mySlides item-1"></div>
		    <span class="left">&#10094;</span>
		    <span class="right">&#10095;</span>
		</div>
		<p><img src="<?php bloginfo('template_url'); ?>/images/rond.png">&nbsp;d'événements</p>
	</div>
</div>
<div class="row actualites">
	<div class="col-12 ">
		<div class="texte">
			<h2>Les dernières actualités</h2>
			<div class="row test1">
				<figure class=" col-sm-12 col-md-6 col-lg-4">
					<a href="" class="fav-coeur"><i class="far fa-heart"></i></a>
					<img class="img-home img-fluid" src="<?php bloginfo('template_url'); ?>/images/image1.jpg">
					<figcaption class="fig-home row">
						<p class="col-8">Nom de l'événement</p>
						<p class="no-margin col-6">Lieu</p>
						<p class="plus-infos no-margin col-6"><a href="">Plus d'infos</a></p>
					</figcaption>
				</figure>
				<figure class=" col-sm-12 col-md-6 col-lg-4">
					<a href="" class="fav-coeur"><i class="far fa-heart"></i></a>
					<img class="img-home img-fluid" src="<?php bloginfo('template_url'); ?>/images/image1.jpg">
					<figcaption class="fig-home row">
						<p class="col-8">Nom de l'événement</p>
						<p class="no-margin col-6">Lieu</p>
						<p class="plus-infos no-margin col-6"><a href="">Plus d'infos</a></p>
					</figcaption>
				</figure>
				<figure class=" col-sm-12 col-md-6 col-lg-4">
					<a href="" class="fav-coeur"><i class="far fa-heart"></i></a>
					<img class="img-home img-fluid" src="<?php bloginfo('template_url'); ?>/images/image1.jpg">
					<figcaption class="fig-home row">
						<p class="col-8">Nom de l'événement</p>
						<p class="no-margin col-6">Lieu</p>
						<p class="plus-infos no-margin col-6"><a href="">Plus d'infos</a></p>
					</figcaption>
				</figure>
			</div>	
		</div>
		<div class="centreplus"><img class="plus" src="<?php bloginfo('template_url'); ?>/images/rond.png">&nbsp;d'actualités</div>
	</div>
</div>
<div class="row">
	<div class="col-12 reseau">
		<h3>Rejoignez-nous !</h3>
		<img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="facebook">
		<img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="twitter">
		<img src="<?php bloginfo('template_url'); ?>/images/insta.png" alt="instagram">
		<img src="<?php bloginfo('template_url'); ?>/images/YouTube.png" alt="youtube">
	</div>
</div>
<?php get_footer(); ?>