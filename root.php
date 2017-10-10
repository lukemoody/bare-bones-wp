<?php
/*
 * Get header();
 */

get_header( root_template_base() );

/*
 * Include page body content
 */

include root_template_path();

/*
 * Get footer();
 */

get_footer( root_template_base() );
