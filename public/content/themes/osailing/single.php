<?php
get_header();
the_post();
?>



<body class="single">
  <?php
  // inclusion du menu
  echo get_template_part('partials/menu-header', 'menu-header');
  ?>
  <main>
    <article class="post">
      <header class="post__header">
        <img class="post__header__image" src="https://picsum.photos/1000/900?random=1">
        <h1 class="post__header__title"><?= get_the_title(); ?></h1>
      </header>
      <main class="post__content">
        <?php
        echo get_the_content();
        // equivaut a : 
        // the_content();
        ?>
      </main>
      <footer class="post__footer">
        Par <?= get_the_author(); ?>
        Dans <a class="post__footer__category-link" href="category.html">

          <?php
          // je récupère toute les catégories sous la forme d'un tableau INDEXé
          $allCategoriesArray = get_the_category();
          // le compte le nombre d'éléments dans ce tableau
          $categoriesNumber = count($allCategoriesArray);
          // je prépare une varuable qui va compter le nombre de tour de boucle ci dessous
          $loopNumber = 0;
          // boucle foreach qui va tourner autant de fois qu'il y a de categories dans mon tableau  $allCategoriesArray
          foreach ($allCategoriesArray as $categoryObject) {
            // a chaque tour de boucle je rajoute 1 a mon compteur de tour
            $loopNumber++;
            // et si le compteur de tour n'est  pas égal au nombre d'élements dans mon tableau (SI JE NE SUIS PAS SUR LE DERNIER TOUR DE BOUCLE)
            if ($loopNumber !== $categoriesNumber) {
              // alors j'affiche le nom de la catégorie ET UNE VIRGULE
              echo $categoryObject->name . ', ';
            } else {
              // mais si je suis sur le dernier tour j'affiche JUSTE le nom de la catégorie
              echo $categoryObject->name;
            }
          }
          ?>

        </a>
        le <time class="post__footer__date" datetime="<?=
                                                      the_time("Y-m-d");
                                                      ?>">
          <?php
          echo get_the_date();
          // je peux aussi utiliser la fonction the_time("Y-m-d")
          ?>
        </time>
      </footer>
    </article>
  </main>
  <section class="pagination">
    <a class="pagination--previous-link button" href="single.html">Article précédent</a>
    <a class="pagination--next-link button" href="single.html">Article suivant</a>
  </section>

  <?php
  get_footer();
  ?>