<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: July 16, 2012
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
   <div class="container">
 <div class="row content">
<div id="content" class="span8">
<div class="blog-content clearfix">	
<article class="post">
 <header class="single-post-header">
        <h3><?php the_title();?></h3>
      </header>
            <?php the_content();?>
            </article><!-- .post -->
<?php endwhile; // end of the loop. ?>
</div><!-- .blog-content -->
          </div><!-- /.span8 -->
 <?php get_sidebar('blog'); ?>
</div><!-- /.row .content -->
</div><!-- .container -->

<?php get_footer(); ?>
