<?php get_header(); ?>
<br><br><br><br><br><br>
<
<div class="container cp-blog">

	<div class="row"> 
		<img class="cp-imgcentraleblog img-responsive col-12" src="<?php bloginfo( "template_url" ) ?>/images/imgcentrale-blog.jpg " alt="imagelettreblog">
	</div>
	<div class="cp-textblog">
				<h1>Blog et actualités des jeux de société</h1> 
 Bienvenu à toi chère coéquipier sur la page d’actualité du jeu! Ici, c’est une véritable chasse aux trésors des informations pour être au courant des dernières tendances du divertissement.
Si « Carcassone » ne t’évoque qu’une ville du Sud, « Risk » la probabilité d'un péril, alors cette page est faite pour toi ! Ici, découvre et partage tes avis avec la communauté et devient un as du jeu. Afin de t’aider dans ta quête nous te proposons un filtre te permettant de sélectionner l’information en fonction de tes enquêtes. Prêt ? A toi de jouer ! 
</div>
		

<br><br>

<!-- ---------------------------------------------------sidebar ------------------------------>
<form method="post">
  <div class="row justify-content-center cp-sidebar">
    <div class="col-4">
      <select class="form-control" name="typeactu" id="typeactualite" placeholder="Choix du type d'actualite">
      	<option value="termactu">
      		<!-- <?php 
      		// $args=array(
      		// 	'taxonomie'=>'type-actualite',
      		// 	'hide_empty'=>0,
      		// 	'title_option'=>'');
      		// wp_list_categories($args);
      		 ?> -->
      		<?php 
      		$args=array(
      			'post_type'=>'actualite',
      			'title_option'=>'',
      			'tax_query'=>array(array(
      				'taxonomy'=>'type-actualite',
      				'field'=>'slug',
      				'terms'=>'',	))
      		
      			); 
      			$actualite=new WP_Query($args);
      			?>
	
      	</option>
      </select>
    </div>
    <div class="offset-1 ">
      <input type="date" class="form-control" placeholder="Last name">
    </div>
    <div class="offset-1 col-1">
    	<button name="action" type="submit" class="bouton-orga"> C PARTIE</button>
    </div>
  </div>
</form>

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


