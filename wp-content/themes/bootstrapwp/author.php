<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */
get_header(); ?>
<?php if ( have_posts() ) : ?>
	<?php
	/* Queue the first post, that way we know
	 * what author we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	the_post();
	?>
	
<?php
					/* Since we called the_post() above, we need to
					 * rewind the loop back to the beginning that way
					 * we can run the loop properly, in full.
					 */
					rewind_posts();
					?>
<div class="container">
<div class="row">
<div id="content" class="span8">
<div class="blog-content clearfix">		
<header class="post-header clearfix" id="overview">
<h2><?php printf( __( 'Author Archives: %s', 'bootstrapwp' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h3>
</header>
		<?php /* Start the Loop */ ?>
	    <?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?>>
				<h3><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
					<?php the_content();?>
		<div class="post-meta"><span><?php echo bootstrapwp_posted_on();?></span>
						<ul class="share">
							<li><script type="text/javascript" src="http://platform.linkedin.com/in.js"></script><script type="in/share" data-url="<?php the_permalink(); ?>" data-counter="right"></script></li>
							<li class="fb-share"><a name="fb_share" type="button_count" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></li>
							<li><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
							<li class="g-plus" data-action="share" data-annotation="bubble"></li>
						    <li><a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>"data-via="xavierf415" data-text="<?php the_title(); ?>" data-related="xavierf.biz" data-count="horizontal">Tweet</a></li>
						</ul>
								  <hr />
		</div><!-- .post-meta -->
        </article><!-- /.post_class -->
								<?php endwhile; ?>
							<?php endif; ?>
						</div><!-- .blog-content -->
						</div><!-- /.span8 -->
<?php get_sidebar('blog'); ?>
						</div><!-- .row -->
</div><!-- .container -->
						<?php get_footer(); ?>