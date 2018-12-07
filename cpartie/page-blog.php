<?php get_header(); ?>
<br><br><br><br><br><br>
<
<div class="container cp-blog">

		<h1>Blog de l'actualité sur l'univers du <strong>jeu</strong> </h1> 
	<p>Bienvenue à toi cher coéquipier sur la page d’actualité du jeu! Ici c’est une véritable chasse aux trésors des informations pour être au courant des dernières tendances du divertissement.</p> 
	<p>Si pour toi Carcassone ne t’évoque qu’une ville du Sud, Risk la probabilité  d'un péril probable, alors cette page est faîte pour toi! Ici découvre et partage tes avis avec la communauté  et devient un as du jeu. Afin de t’aider dans ta quête nous te proposons un filtre te permettant de sélectionner l’information en fonction de tes enquêtes. Prêt à  toi de jouer? </p>

	<div class="row">
		<img class="cp-imgcentraleblog img-responsive col-12" src="<?php bloginfo( "template_url" ) ?>/images/imgcentraleblog.png " alt="imagedé">
		</div>
<br><br>

<!-- ---------------------------------------------------sidebar ------------------------------>
<div class="row cp-sidebar">
<fieldset class="col-3 cp-rechercheactu">
<form  class="cp-form" method="post" action="">
	<label for="typeactu">Type actualité</label> <br>
	<select name="typeactu" id="" placeholder="selectionnez type d'actualité" class="col-12">
		<option value="sortiejeux">Sortie de nouveaux jeux</option>
		<option value="ouvertureairedejeux">Ouverture d'une nouvelle aire de jeu</option>
		<option value="informations"> Actualités liées à l'univers du jeu</option>
		<option value="nosrencontres">Nos rencontres</option>
	</select> <br> <br> <br>
	<label for="date">
		Saisir une date
	</label>
	<input type="date" name="date" placeholder="Choisissez une date"> <br> <br><br>
	<a href="#" class="bouton-orga offset-8 col-4">Cpartie</a>

</form>
</fieldset>
<!-------------------------------------------------------- card ----------------------------->
	<div class="col-9">
		
		
		<div class="card offset-1 col-4" style="width: 18rem;">
			  <img class="card-img-top" src=" <?php get_the_post_thumbnail( get_the_ID(), 'medium') ?>" alt="Card image cap">
			  <div class="card-body">
				    <h5 class="card-title"> </h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				    }
			  </div>
		</div>
			
	  </div>
	</div>

</div>


