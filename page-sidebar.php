<?php
/*
 * Template name: Page with Sidebar
 */

if (have_posts()) :
while (have_posts()) : the_post();

  get_template_part('template-parts/content', 'page-sidebar');

endwhile;
endif;
