<?php 
get_header(); 
?>
<div class="cp-cgu row">
	<div class="col-md-4 cp-carre">
		E-mail/Pseudo<br>
		<input type="text"><br>
		Password<br>
		<input type="text">
		<button class="bouton-connexion">Se connecter</button><button class="bouton-connexion float">Rejoins-nous !</button>
		<div class="centre"><a href="<?php bloginfo('url')?>/mdpoublie">Mot de passe perdu ?</a></div>
	</div>
</div>
<?php get_footer(); 
?>