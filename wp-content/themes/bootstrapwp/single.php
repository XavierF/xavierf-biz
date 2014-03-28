<?php
/**
 * The template for displaying all posts.
 *
 * Default Post Template
 *
 * Page template with a fixed 940px container and right sidebar layout
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */
get_header(); ?>
<div class="container">
<?php while ( have_posts() ) : the_post(); ?>
<div class="single-post-content clearfix"> 
      <section class="clearfix">
      <header class="single-post-header"><h3><?php the_title();?></h3></header>
            <?php the_content();?>
           <div class="post-meta clearfix"><p><?php echo bootstrapwp_posted_on();?></p>
               <ul class="share-single">
				   <li><script type="text/javascript" src="http://platform.linkedin.com/in.js"></script><script type="in/share" data-url="<?php the_permalink(); ?>" data-counter="right"></script></li>
				   <li class="fb-share"><a name="fb_share" type="button_count" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></li>
				   <li><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
				   <li class="g-plus" data-action="share" data-annotation="bubble"></li>
				   <li><a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>"data-via="xavierf415" data-text="<?php the_title(); ?>" data-related="xavierf.biz" data-count="horizontal">Tweet</a></li>
				</ul>
           </div><!-- .post-meta --> 
            <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
     </section>      
<?php endwhile; // end of the loop. ?>
 <?php comments_template(); ?>
 <?php bootstrapwp_content_nav('nav-below');?>
 </div><!-- .single-post-content -->     
</div><!-- .container -->
<?php get_footer(); ?>