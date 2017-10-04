<article <?php post_class() ?>>
  <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="post-thumb">
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
    </div>
  <?php endif; ?>
  <?php the_content(); ?>
  <?php get_template_part('template-parts/post/entry-meta'); ?>
</article>
