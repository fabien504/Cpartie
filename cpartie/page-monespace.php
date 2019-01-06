<?php 
get_header(); 
?>
<div class="cp-monespace row">
	<div class="cp-pseudo">
    <div class="imgpro">
			<img class="photoprofil" src="<?php bloginfo('template_url')?>/images/img-blog/cookie.jpg" alt="votre photo de profil">
			<p>Pseudo</p>	
		</div>
		<div class="formulaire">
			<span class="texte">Mes jeux préférés</span><br>
			<input type="text"><br>
			<span class="texte">Ma devise de jeux</span><br>
			<textarea name="devise" id="devise" cols="38" rows="5"></textarea>
		</div>
		<div class="modif">
			<img class="img1" src="<?php bloginfo('template_url')?>/images/favori.png" alt=""><span data-toggle="modal" data-target="#exampleModalCenter" class="listeenvie">La liste de mes envies</span><br>
			<img class="img2" src="<?php bloginfo('template_url')?>/images/engrenage_blanc.png" alt=""><button class="bouton-connexion">Modifier mon profil</button><br>
			<img src="<?php bloginfo('template_url')?>/images/avatarvide_blanc.png" alt=""><button class="bouton-connexion">Modifier mon avatar</button>
		</div>
	</div>
	<div class="cp-mesparties">
		<span class="partiesvenir">Mes parties à venir</span>
	</div>
	<div class="cp-historiques">
		<span class="partieshistorique">Mon historique de parties</span>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
			<img class="img1" src="<?php bloginfo('template_url')?>/images/favori.png" alt=""><span class="listeenvie">La liste de mes envies</span>
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>
<?php get_footer(); 
?>