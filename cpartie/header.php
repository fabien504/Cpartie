<!DOCTYPE html>
<html lang="fr">
    <head>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/images/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/styles/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/js/owl.carousel/dist/assets/owl.carousel.min.css" />
    <title>Cpartie</title>
    <?php wp_head(); ?>
    </head>
    <div class="site-container">
        <body>
            <header class="cp-header">
                <div class="topbar">
                    <span class="cache">
                        <img src="<?php bloginfo('template_url');?>/images/Drapeau_France.png" alt="drapeau français">Français
                    </span>
                    <div class="connexion">
                        <a href="<?php bloginfo('url')?>/connexion">CONNEXION</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                        <a href="<?php bloginfo('url')?>/connexionpro">ESPACE PRO</a>  
                    </div>
                </div>
                <?php get_template_part('menuheader') ?>
           