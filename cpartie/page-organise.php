<?php 
get_header(); 
?>
<div class="titreorga"><h3>Tu as l'âme d'un organisateur ?</h3></div>
<p class="textorga">
	Avec  C Partie, tu peux toi même organiser une partie chez toi ou chez l’un de nos partenaires !!
	Sois le maître du jeu, en choisissant le nom de ton événement, le lieu, la date, l’heure, le type de jeux et le nombre de joueurs.
	Tu pourras alors rencontrer des personnes intéressantes, qui comme toi aiment l’univers du jeu.
</p>
<div class="cp-organise row">
	<div class="col-xs-12 col-md-6 col-lg-4 ">
		<div class="iconeorganise">
			<a href="<?php bloginfo( "url" ) ?>/domicile"><button class="bouton-connexion">A DOMICILE</button></a>
			<img src="<?php bloginfo( "template_url" ) ?>/images/domicile.png" alt="">
		</div>
		<div class="imageorganise"><img src="<?php bloginfo( "template_url" ) ?>/images/fe.jpg" alt=""></div>
		<h5>Pratique et facile !</h5>
		<p>
			Pratique et facile !
			Envie de partager un moment de convivialité tout en restant chez toi ??<br>
			Organise une partie pour recevoir dans ton salon tes prochains adversaires  !
		</p>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-4">
		<div class="iconeorganise">
			<a href="<?php bloginfo( "url" ) ?>/exterieur"><button class="bouton-exterieur">CHEZ UN PARTENAIRE</button></a>
			<img src="<?php bloginfo( "template_url" ) ?>/images/extérieur.png" alt="">
		</div>
		<div class="imageorganise"><img src="<?php bloginfo( "template_url" ) ?>/images/partenaire.jpeg" alt=""></div>
		<h5>Sortir et se divertir !</h5>
		<p>
			Sortir et se divertir 
			Envie de prendre l'air, de découvrir ou faire découvrir nos nouveaux partenaires !!!
		</p>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-4">
		<div class="iconeorganise">		
			<a href="<?php bloginfo( "url" ) ?>/public"><button class="bouton-connexion">PUBLIC</button></a>
			<img src="<?php bloginfo( "template_url" ) ?>/images/public.png" alt="">
		</div>
		<div class="imageorganise"><img src="<?php bloginfo( "template_url" ) ?>/images/bg.jpg" alt=""></div>
		<h5>Ludique et public</h5>
		<p>
			Ludique et public
			Partage ton événement ludique pour avoir un maximum de visites
		</p>						
	</div>
</div>
<?php get_footer(); 
?>