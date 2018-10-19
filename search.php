<?php
/*
 * Search Page Template
 * The template for displaying search results pages
 *
*/
?>

<section class="container spacing">
  <div class="row">
    <div class="grid-xs-12 grid-sm-12 grid-md-12">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php $string = get_the_content(''); $newString = substr($string, 0, 120); echo $newString; ?> ...</p>
        <hr />

      <?php endwhile; else : ?>

        <h2>Nothing Found</h2>
        <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bare-bones-wp' ); ?></p>
        <?php get_search_form(); ?>

      <?php endif; ?>

    </div>
  </div>
</section>
