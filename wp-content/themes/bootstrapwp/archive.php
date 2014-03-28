<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.6
 */

get_header();
if (have_posts() ) ;?>
<div class="container">
	<div class="row">
	<div id="content" class="span8">
	<div class="blog-content clearfix">
	<header class="post-header clearfix" id="overview">
		<h2><?php
		if ( is_day() ) {
			printf( __( 'Daily Archives: %s', 'bootstrapwp' ), '<span>' . get_the_date() . '</span>' );
		} elseif ( is_month() ) {
			printf( __( 'Monthly Archives: %s', 'bootstrapwp' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'bootstrapwp' ) ) . '</span>' );
		} elseif ( is_year() ) {
			printf( __( 'Yearly Archives: %s', 'bootstrapwp' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'bootstrapwp' ) ) . '</span>' );
		} elseif ( is_tag() ) {
			printf( __( 'Tag Archives: %s', 'bootstrapwp' ), '<span>' . single_tag_title( '', false ) . '</span>' );
					// Show an optional tag description
			$tag_description = tag_description();
			if ( $tag_description )
				echo apply_filters( 'tag_archive_meta', '<span class="tag-archive-meta">' . $tag_description . '</span>' );
		} elseif ( is_category() ) {
			printf( single_cat_title( '', false ) );
					// Show an optional category description
			$category_description = category_description();
			if ( $category_description )
				echo apply_filters( 'category_archive_meta', '<span class="category-desc">' . $category_description . '</span' );
		} else {
			_e( 'Blog Archives', 'bootstrapwp' );
		}
		?></h2>
</header>
		<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?>>
			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
				 <?php the_content();?>
			<div class="post-meta">
				 <span><?php echo bootstrapwp_posted_on();?></span>
						<ul class="share">
							<li><script type="text/javascript" src="http://platform.linkedin.com/in.js"></script><script type="in/share" data-url="<?php the_permalink(); ?>" data-counter="right"></script></li>
							<li class="fb-share"><a name="fb_share" type="button_count" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></li>
							<li><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
							<li class="g-plus" data-action="share" data-annotation="bubble"></li>
							<li><a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>"data-via="xavierf415" data-text="<?php the_title(); ?>" data-related="xavierf.biz" data-count="horizontal">Tweet</a></li>
						</ul>
				        	 <hr />
				        	</div><!-- .post-meta -->	        	
			</article>	<!-- /.post_class -->
			<?php endwhile; ?>
			<?php bootstrapwp_content_nav('nav-below');?>
</div><!-- .blog-content -->
</div><!-- /.span8 -->
<?php get_sidebar('blog'); ?>
</div><!-- .row -->
</div><!-- .container -->
		<?php get_footer(); ?>