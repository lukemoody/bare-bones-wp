<?php
/*
 * Template name: Home
 */


  if (have_posts()) :
  while (have_posts()) : the_post();

    get_template_part('template-parts/content', 'front-page');

  endwhile;
  endif;
