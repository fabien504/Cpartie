<?php 
get_header(); 
?>
<div class="row">
	<div class="col-6">
		<div class="cp-texte"><h3>Essai d'un an gratuit !</h3></div> 
		<div class="cp-proconnect row">
			<div class="col-md-8 cp-pro">
				E-mail/Pseudo<br>
				<input type="text"><br>
				Password<br>
				<input type="password">
				<button class="bouton-connexion">Se connecter</button><a href="<?php bloginfo('url')?>/inscriptionpro"><button class="bouton-connexion float">Rejoins-nous !</button></a>
				<div class="centre"><a href="<?php bloginfo('url')?>/mdpoublie">Mot de passe perdu ?</a></div>
			</div>
		</div>
	</div>
	<div class="col-6 ">
		<div class="col-8 cp-carre cp-infopro">
		</div>
	</div>
</div>
<?php get_footer(); 
?>