<?php 
get_header(); 
the_post();
?>
<div class="cp-404 row">
	<div class="col-md-12">
		<img src="<?php bloginfo('template_url')?>/images/page_404.gif" alt="monsieur qui répare une prise d'électricité">
	</div>
    <div class="col-md-12">
        <h3>Oups, perdu !!!</h3>
    </div>
    <div class="col-md-12">
        <p>Il semblerait que cette page n'existe plus ou qu'une erreur se soit glissée sur le site.</p>
    </div>
</div>
<?php get_footer(); ?>




		