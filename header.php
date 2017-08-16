<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <div class="container">
      <div class="row">
        <div class="grid-xs-12 grid-sm-12 grid-md-12">
          <img src="<?php echo get_site_url(); ?>/wp-content/themes/bare-bones-wp/includes/assets/logo/logo.png" alt="Created by Luke Moody | Mooke Creative" width="100px" style="margin: 20px 0" />
        </div>
      </div>
      <div class="row">
        <div class="grid-xs-12 grid-sm-6 grid-md-6">
          <h1>Hello World</h1>
          <p>Welcome to Fabric.</p>
        </div>
        <div class="grid-xs-12 grid-sm-6 grid-md-6">
          <p>This is a default page.</p>
        </div>
      </div>
    </div>
