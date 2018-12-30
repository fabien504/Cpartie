<?php 
get_header(); 
?>
<div class="cp-cgu row">
	<div class="col-md-12 col-lg-9 col-xl-5 cp-carre2 cp-inscription cp-inscriptionpro">
		<div class="row">
			<div class="col-6">
				Nom entreprise<br>
				<input type="text"><br>
				E-mail<br>
				<input type="text"><br>
                Code postal<br>
				<input type="text"><br>
			</div>
			<div class="col-6">
				N° SIRET<br>
				<input type="password"><br>
				Téléphone<br>
				<input type="text"><br>
			</div>
		</div>
		<input type="checkbox"><span class="cgu"><a href="<?php bloginfo('url')?>/cgu" target=_blank>Accepter les CGU</a></span> 
		<button class="bouton-inscription float">Demande d'inscription</button>
	</div>
</div>
<?php get_footer(); 
?>