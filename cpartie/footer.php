		<footer>
			<div class="container-fluid cp-navfooter">
				<div class="row justify-content-between cp-navfooter2">
					<div class="col-lg-4 col-md-6 col-sm-12 cp-footermenu">
						<h4>Menu</h4>
						<ul>
							<li><a href="<?php bloginfo('url')?>/concept">Concept</a></li>
							<li><a href="<?php bloginfo('url')?>/evenement"> Evénements</a></li>
							<li><a href="<?php bloginfo('url')?>/concept">Où jouer?</a></li>
							<li><a href="<?php bloginfo('url')?>/monespace">Mon espace</a></li>
							<li><a href="<?php bloginfo('url')?>/actualite"> Actualités</a></li>
							<li><a href="<?php bloginfo('url')?>/organise">Organiser une partie</a></li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 cp-formcontact">
						<form action="" method="post">
						<h4>Nous contacter</h4>	
							<input type="mail" name="mail" placeholder="Saisissez un email" size="30"><br>
							<input type="text" name="nom" placeholder="Saisissez votre nom" size="30"><br>
							<textarea name="message" id="messagecontact" rows="4" placeholder="Saisissez votre message"></textarea> <br>	
							<a href="" class="btn-envoi" action="envoi">Envoyer</a>
						</form>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 cp-social">
						<h4><em>Suivez-nous!</em></h4>
						<span style="font-size: 48px; color: white;">
	  						<a href="http://www.facebook.com/C-Partie-507143886438100"><i class="fab fa-facebook-square"></i></a>
						</span>
						<span style="font-size: 48px; color: white;">
	  						<a href="http://www.instagram.com/_c_partie_"><i class="fab fa-instagram"></i></a>
						</span>
						<span style="font-size: 48px; color: white;">
	  						<a href="https://twitter.com/C_Partie_"><i class="fab fa-twitter-square"></i></a>
						</span>
						<span style="font-size: 48px; color: white;">
	  						<a href="https://www.youtube.com/channel/UCL71j32jn3zxyr2gsHxgyPQ"><i class="fab fa-youtube-square"></i></a>
						</span>
					</div>			
				</div>
				<div class="row justify-content-center cp-footerbas">
					<a  class="col-sm-3 col-md-2 " href="">Copyright</a>
					<a class="col-sm-3 col-md-2 " href="<?php bloginfo('url')?>/cgu">CGU</a>
					<a class="col-sm-3 col-md-2" href="<?php bloginfo('url')?>/donnees-personnelles">Politique de confidentialité</a>
					<a class="col-sm-3 col-md-2" href="<?php bloginfo('url')?>/donnees-personnelles#cookie">Mentions légales</a>		
				</div>
			</div>
		</footer>
	</body>
</div>
<script src="<?php bloginfo('template_url');?>/js/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/carousel.js"></script>
<script>
/****************ATTENTE CHARGEMENT DE LA PAGE*********/
$(document).ready(function(){
/*******************************************************/
	$('.cp-hamburger img').on('click',function(event) {
		event.preventDefault();
		$('.cp-menutel').toggleClass('with--sidebar');
		$('html').css('overflow-y', 'hidden'); 
		$('body').toggleClass('site-cache');
	});

	$('.exit').click(function(e){
      	$('.cp-menutel').removeClass('with--sidebar');
      	$('html').css('overflow-y','scroll');
    });

    $('display-container .right').on('click', function(event) {
    	event.preventDefault();
    	alert('bla');
    	$('item-1').replaceWith('item-2', function() {	
    	});
    });

    $('i').click(function(event) {
    	$(this).toggleClass('fas');
    	$(this).toggleClass('far');
    });

/*******************************************************/
});
/*******************************************************/	
</script>
<?php wp_footer(); ?>
</html>