<?php 
get_header(); 
?>
<div class="cp-cgu row">
	<div class="col-md-12 col-lg-9 col-xl-5 cp-carre2 cp-inscription">
		<div class="row">
			<div class="col-6">
				E-mail<br>
				<input type="text"><br>
				Pseudo<br>
				<input type="text"><br>
			</div>
			<div class="col-6">
				Password<br>
				<input type="password"><br>
				Code postal<br>
				<input type="number"><br>
			</div>
		</div>
		<input type="checkbox"><span class="cgu"><a href="<?php bloginfo('url')?>/cgu" target=_blank>Accepter les CGU</a></span> 
		<button class="bouton-connexion float">S'inscrire</button>
	</div>
</div>
<?php get_footer(); 
?>