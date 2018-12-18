<!DOCTYPE html>
<html lang="fr">
    <head>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/images/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/styles/style.css">
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
                        <a href="#">ESPACE PRO</a>  
                    </div>
                </div>
                <?php get_template_part('menuheader') ?>
           