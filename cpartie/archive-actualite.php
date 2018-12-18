<?php get_header(); 
$args=array(
 	'taxonomy'=>'type-actualite',
    'hide_empty'         => 0,
    'orderby'            => 'name',
    'order'              => 'ASC',
    'show_count'         => 0,
    'use_desc_for_title' => 0,
    'title_li'           => 0,
    'separator'           => ',',
    'style'              => '',
    'echo'               => false,
 );

$arg=wp_list_categories($args);

$option=explode(",", $arg);
var_dump($option);
?>
<br><br><br><br><br><br>
<div class="container cp-blog">
	<div class="row"> 
		<img class="cp-imgcentraleblog img-responsive col-12" src="<?php bloginfo( "template_url" ) ?>/images/imgcentraleblog.png" alt="imagelettreblog">
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
      <select class="form-control" name="typeactu" id="typeactualite">
      	<option value=""><?= $option[0]; ?></option>
      	<option value=""><?= $option[1]; ?></option>
      	<option value=""><?= $option[2]; ?></option>
      	<option value=""><?= $option[3]; ?></option>
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
<?php get_footer(); ?>