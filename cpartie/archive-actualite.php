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
// var_dump($option);

// Achaque click sur le bouton c partie//////////
$action=$_POST["action"];
if ($action=="afficher")
?>

<div class="container-fluid cp-blog">
	<div class="row">
		<div class="cpimgblog col-12 img-responsive">
			<h1 class="hover">Blog et actualités des jeux de société</h1> 
		</div>
	</div>
	<div class="cp-textblog">
Bienvenu à toi cher coéquipier sur la page d’ <strong>actualité du jeu</strong>! Ici, c’est une véritable chasse aux trésors des informations pour être au courant des dernières tendances du divertissement.
Si « Carcassone » ne t’évoque qu’une ville du Sud, « Risk » la probabilité d'un péril, alors cette page est faite pour toi ! Ici, découvre et partage tes avis avec la communauté et devient un as du jeu. Afin de t’aider dans ta quête nous te proposons un filtre te permettant de sélectionner l’information en fonction de tes enquêtes. Prêt ? A toi de jouer ! 
</div>
<!-- ---------------------------------------------------sidebar ------------------------------>
<div class="row justify-content-center cp-sidebar">
	<form method="post"class="form-inline col-12">
 		  Actualités triées par... &nbsp
	      <select class="form-control cp-barrerecherche" name="typeactu" id="typeactualite">
	      	<option value=""><?= $option[0]; ?></option>
	      	<option value=""><?= $option[1]; ?></option>
	      	<option value=""><?= $option[2]; ?></option>
	      	<option value=""><?= $option[3]; ?></option>
	      </select> 
	      <input type="date" class="form-control cp-barrerecherche" placeholder="Last name">
	      <button name="action" type="submit" class="bouton-orga cp-barrerecherche" value="afficher"> C PARTIE</button>
	</form>
 </div>
<br>
<!-------------------------------------------------------- card ----------------------------->
<h2> Les actualités</h2>

<div class="row justify-content-center">
	<?php while (have_posts()) {
	    the_post();
	 ?>
	<div class="col-5 cp-imgcardactu">
	<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(300,300) ) ?></a>
	</div>
	<table class="col-5 cp-textcardactu">
		<tr>
			<td>Date: <?php echo get_post_meta( get_the_ID(), 'wpcf-date-publication', true ); ?></td>
		</tr>
		<tr>
			<td> <?php the_title() ?></td>
		</tr>
		<tr>
			<td>Type <?php $vv=get_the_terms( get_the_ID(), 'type-actualite'); ?></td>
		</tr>
		<tr>
		<td><a href="<?php the_permalink( ) ?>" class="btn-voirplus">Voir plus</a></td>
	</tr>
	</table>
	<?php } ?>
	</div>	
<?php get_footer(); ?>