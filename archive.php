<?php
/*
 * Archive Page Template
*/
?>

<section class="container spacing">
  <div class="row">
    <div class="grid-xs-12 grid-sm-12 grid-md-12">

      <?php if (have_posts()) : ?>

        <h1><?php single_cat_title(); ?></h1>

      <?php while (have_posts()) : the_post();

        get_template_part( 'template-parts/content', 'posts'); ?>

        <ul class="meta">
          <li><?php the_time('F js, Y'); ?></li>
          <li>Posted in <?php the_category(', '); ?></li>
          <li><?php comments_number('No Comments','1 Comment', '% Comments'); ?></li>
        </ul>

      <?php endwhile; ?>

        <ul class="pagination">
          <li class="older"><?php next_posts_link('Older'); ?></li>
          <li class="newer"><?php previous_posts_link('Newer'); ?></li>
        </ul>

      <?php else : ?>

        <h2>Nothing Found</h2>
        <p>Sorry, but you are looking for something that isn't here.</p>
        <p><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></p>

      <?php endif; ?>

    </div>
  </div>
</section>
