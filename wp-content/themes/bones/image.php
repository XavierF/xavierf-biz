<?php
/*
 Template Name: Image
 *
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>
<?php get_header(); ?>
			<div class="container-fluid cf">

						
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
								<header class="image-header">
									<h4 class="page-title"><?php the_title(); ?></h4>
								</header>
					


								<section class="image-content cf" itemprop="imageBody">
									<?php the_content(); ?>
									<?php if(wp_attachment_is_image($post->id)) : $att_image = wp_get_attachment_image_src($post->id, "full"); ?>
  <div class="attachment"><a class="show_image" href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php echo get_the_title(); ?>"><img class="img-responsive attachment-large" src="<?php echo $att_image[0]; ?>"  alt="<?php echo get_the_title(); ?>"></a>
  </div>
<?php else : ?>
    <a href="<?php echo wp_get_attachment_url($post->ID) ?>" title="<?php echo wp_specialchars( get_the_title($post->ID), 1 ) ?>"><?php echo basename($post->guid) ?></a>
<?php endif; ?>
								</section>


					

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>



			</div><!-- end container-fluid -->


<?php get_footer(); ?>
