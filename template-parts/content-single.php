<section class="container spacing">
  <div class="row">
    <article>
      <h1><?php the_title(); ?></h1>
      <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumb">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>
      <?php the_content(); ?>
      <?php get_template_part('template-parts/post/entry-meta'); ?>
      <?php get_template_part('template-parts/post/comments'); ?>
    </article>
  </div>
</section>
