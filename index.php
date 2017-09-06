<?php
/*
  Index
*/
get_header(); ?>

<div class="container">
  <div class="row">
    <div class="grid-xs-12 grid-sm-12 grid-md-12">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

          <div <?php post_class() ?>>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

            <?php if ( has_post_thumbnail() ) : ?>
            <div class="post-thumb">
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
            </div>
          <?php endif; ?>

          <?php the_content(''); ?>

          <ul class="meta">
            <li><?php the_time('F js, Y'); ?></li>
            <li>Posted in <?php the_category(', '); ?></li>
            <li><?php comments_number('No Comments','1 Comment', '% Comments'); ?></li>
          </ul>
        </div>

      <?php endwhile; ?>

      <div class="pagination">
        <ul>
          <li class="older"><?php next_posts_link('Older'); ?></li>
          <li class="newer"><?php previous_posts_link('Newer'); ?></li>
        </ul>
      </div>

    <?php else : ?>

      <h2>Nothing Found</h2>
      <p>Sorry, but you are looking for something that isn't here.</p>
      <p><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></p>

    <?php endif; ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
