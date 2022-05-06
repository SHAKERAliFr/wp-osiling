<article class="post post--excerpt">
      <?php
      if (has_post_thumbnail(get_the_id())) {
            echo '<img class="post__image" src=" ' . get_the_post_thumbnail_url() . ' ">';
      }

      ?>

      <h3 class="post__title"><?php the_title(); ?></h3>
      <!--CI dessus, je peux faire the_title() ou echo get_the_title();-->
      <p class="post__excerpt"><?= get_the_excerpt(); ?></p>
      <a href="<?php echo get_the_permalink(); ?>" class="post__link">Lire la suite</a>
</article>