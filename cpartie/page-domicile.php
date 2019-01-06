<?php 
get_header(); 
?>
<div class="cp-domicile">
    <input type="text" placeholder="Saisir un nom d'événement">
    <div class="row">
        <div class="col-6">
            <div class="cp-descriptionorga">
                <div class="imgpro2">
                    <img class="photoprofil2" src="<?php bloginfo('template_url')?>/images/img-blog/cookie.jpg" alt="votre photo de profil">
                    Pseudo
                </div>
                <textarea name="" id="" cols="35" rows="5" placeholder="Saisir la description de l'événement"></textarea>
            </div>
            <div class="cp-ajoutimage">
                <button class="bouton-domicile">Choisir une image</button>
            </div>
        </div>
        <div class="col-6 cp-formulaire">
            <img src="<?php bloginfo('template_url')?>/images/date.png" alt="date">
            <input type="date">
            <img src="<?php bloginfo('template_url')?>/images/heure.png" alt="heure">
            <form action="">
                <select name="typedejeu" id="">
                    <option hidden disabled selected>Heure</option>
                    <option value="b">bv</option>
                    <option value="v">cvb</option>
                </select>
		    </form>
            <div class="cp-formulaire2">
                <div class="type">
                    <img src="<?php bloginfo('template_url')?>/images/mystère.png" alt="point d'interrogation">
                    Type de jeu
                    <select name="" id="">
                        <option hidden disabled selected>Type</option>
                        <option value="b">bv</option>
                        <option value="v">cvb</option>
                    </select>
                </div>
                <div class="type">
                    <img src="<?php bloginfo('template_url')?>/images/nbrjoueurs.png" alt="icone joueur">
                    Nombre de joueurs
                    <select name="" id="">
                        <option hidden disabled selected>Mini</option>
                        <option value="b">bv</option>
                        <option value="v">cvb</option>
                    </select>
                    <select name="" id="">
                        <option hidden disabled selected>Maxi</option>
                        <option value="b">bv</option>
                        <option value="v">cvb</option>
                    </select>
                </div>
                <div class="">
                    <img src="<?php bloginfo('template_url')?>/images/nbrjoueurs.png" alt="">
                    Adresse
                    <input type="text" placeholder="rue"><br>
                    <div class="mg-left">
                        <input type="text" placeholder="Code postal"><br>
                        <input type="text" placeholder="Ville">
                    </div>
                </div>
                <button class="bouton-orgacpartie">Cpartie</button>
            </div>
        </div>
    </div>  
</div>
<?php get_footer(); ?>