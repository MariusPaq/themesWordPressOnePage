<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <header class="header">
      <div class="navbar">
        <ul id="menu">
          <li id="freins"><a href="#les-freins">LES FREINS</a></li>
          <li id="chiffres"><a href="#parlons-chiffres">PARLONS CHIFFRES</a></li>
          <li id="acces"><a href="#favoriser-lacces-aux-femmes">FAVORISER L'ACCES AUX FEMMES</a></li>
        </ul>
      </div>
      <div class="navCircle">
        <a href="<?php echo home_url( '/' ); ?>">
          <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
        </a>
        <div class="burgerMenu">
          <ul>
            <li id="freinsbm"><a class="textD"  href="#les-freins">LES FREINS</a></li>
            <li id="chiffresbm"><a class="textD" href="#parlons-chiffres">PARLONS CHIFFRES</a></li>
            <li id="accesbm"><a class="textD" href="#favoriser-lacces-aux-femmes">FAVORISER L'ACCES AUX FEMMES</a></li>
          </ul>
          <div id="iconebm"></div>
        </div>
      </div>
    </header>
    <div class="containerPers">
    <?php wp_body_open(); ?>
