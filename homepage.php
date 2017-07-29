<?php
/*
  Template name: Home
*/
get_header();

if (have_posts()) :
while (have_posts()) : the_post(); ?>

<div class="container">
  <div class="row">
    <div class="grid-xs-12 grid-sm-12 grid-md-12">

      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

    </div>
  </div>
</div>

<?php
endwhile;
endif;

get_footer(); ?>
