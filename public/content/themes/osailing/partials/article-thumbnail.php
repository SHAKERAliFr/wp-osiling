<article class="post post--excerpt">
      <img class="post__image" src="https://picsum.photos/300/200?random=1">
      <h3 class="post__title"><?php the_title();?></h3>
      <!--CI dessus, je peux faire the_title() ou echo get_the_title();-->
      <p class="post__excerpt"><?=get_the_excerpt();?></p>
      <a href="<?php echo get_the_permalink();?>" class="post__link">Lire la suite</a>
</article>