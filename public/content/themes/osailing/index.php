<?php
get_header();
?>

<body class="home">
  <header class="header header--vertical" style="background-color:<?= get_theme_mod('menu-color') ?>">
    <div class="logo logo--vertical">
      <img src="<?= get_theme_file_uri(); ?>/assets/images/logo.svg" class="logo__image" alt="">
      <h1 class="logo__text">oSailing</h1>
    </div>
    <nav class="menu menu--vertical">
      <ul class="menu__list">
        <li class="menu__list__item"><a class="menu__list__item__link menu__list__item__link--active" href="#banner">Intro</a></li>
        <li class="menu__list__item"><a class="menu__list__item__link" href="#post-list">Articles</a></li>
        <li class="menu__list__item"><a class="menu__list__item__link" href="#values">Valeurs</a></li>
      </ul>
    </nav>
  </header>
  <section class="banner" id="banner">
    <h2 class="banner__title">
      <?php
      // DOC WP récupération inforation du site : https://developer.wordpress.org/reference/functions/get_bloginfo/
      // affichage de la "tag line" du site. La tag est modifiable dans le backoffice (Settings -> general)
      bloginfo('description');
      /*
            Je peux aussi faire 
            echo get_bloginfo('description');
            */
      ?>

    </h2>
    <img src="<?= get_theme_mod('header-background-image') ?>" class="banner__image">
  </section>
  <main class="post-list post-list--home" id="post-list">

    <?php
    // DOC WP partial : https://developer.wordpress.org/reference/functions/get_template_part/
    // IMPORTANT boucle Wordpress
    //si il y a des posts
    if (have_posts()) {
      // tant qu'il y a des posts
      while (have_posts()) {
        // chargement du post dans la boucle
        the_post();
        echo get_template_part('partials/article-thumbnail', 'article-thumbnail');
      }
    }
    ?>

    <a class="button" href="blog.html">Voir les articles plus anciens</a>
  </main>
  <section class="category-list" id="values">
    <div class="category">
      <h4 class="category__name"><a class="category__name__link" href="category.html">Escales</a></h4>
      <span class="category__post-count">19</span>
    </div>
    <div class="category">
      <h4 class="category__name"><a class="category__name__link" href="category.html">Semaines en mer</a></h4>
      <span class="category__post-count">123</span>
    </div>
    <div class="category">
      <h4 class="category__name"><a class="category__name__link" href="category.html">Rencontres</a></h4>
      <span class="category__post-count">214</span>
    </div>
  </section>

  <?php
  get_footer();
  ?>