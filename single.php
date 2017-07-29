<?php
/*
  Single
*/
get_header();

if (have_posts()) :
while (have_posts()) : the_post(); ?>

<div class="container">
  <div class="row">
    <div class="grid-xs-12 grid-sm-12 grid-md-12">

      <div class="post">
        <h1><?php the_title(); ?></h1>
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="post-thumb">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php endif; ?>
        <?php the_content(); ?>
      </div>

    </div>
  </div>
</div>

<?php
endwhile;
endif;

get_footer(); ?>
