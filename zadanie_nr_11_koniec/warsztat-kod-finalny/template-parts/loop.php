<style>
  .post-item {
    margin-bottom: 30px;
  }

  .post-item a {
    color: #0073aa;
  }
</style>

<section>
  <?php while(have_posts()) { ?>
    <?php the_post(); ?>

    <div class="post-item">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="post-excerpt"><?php the_excerpt(); ?></div>
    </div>

  <?php } ?>
</section>
