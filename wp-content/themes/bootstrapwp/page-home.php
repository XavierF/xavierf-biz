<?php
/**
 * Template Name: Home Hero Template with 3 widget areas
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */
get_header(); ?>
<?php
// The Query
query_posts('cat=6');
?>
<div class="jumbotron">
<div class="container clearfix">
<div class="flexslider">
<ul class="slides">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <li>
     <div <?php post_class(); ?>>
     <h3><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
     <div class="post-content"><?php the_content();?></div>
  </li>
 <?php endwhile; endif; 
// Reset Query
wp_reset_query();
?>  
 </ul>
 </div><!-- .flexslider -->
</div><!-- .container -->
</div><!-- .jumbotron -->
<div class="container clearfix">
  <div class="marketing">
  <div class="row-fluid">
    <div class="span4">
  		<div class="marketing-content">
      <?php
if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-left" );
?>
		</div><!-- .marketing-content -->
    </div><!-- .span4 -->
    <div class="span4">
       <div class="marketing-content">
      <?php
if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-middle" );
?>
		</div><!-- .marketing-content -->
    </div><!-- .span4 -->
    <div class="span4">
       <div class="marketing-content">
      <?php
if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-right" );
?>
		</div><!-- .marketing-content -->
    </div><!-- .span4 -->
  </div><!-- .row-fluid -->
</div><!-- /.marketing -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script>
$(window).load(function() {
    $('.flexslider').flexslider({
          animation: "slide",
          easing: "swing",
          slideshow: false
    });
});
  </script>
</div>
<?php get_footer();?>
