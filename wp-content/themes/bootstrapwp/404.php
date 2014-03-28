<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.7
 *
 * Last Revised: January 22, 2012
 */
get_header(); ?>
 
      <div class="jumbotron">
      <div class="container clearfix">
      <div class="well">
        <h1><?php _e( '404! PAGE NOT FOUND', 'bootstrapwp' ); ?></h1>
        <p class="lead"><?php _e( 'Please try again or submit your search below', 'bootstrapwp' ); ?></p>
        <?php get_search_form(); ?>
      </div><!--.well-->
	  </div><!--.container  -->
	  </div><!--.jtron -->
<?php get_footer(); ?>