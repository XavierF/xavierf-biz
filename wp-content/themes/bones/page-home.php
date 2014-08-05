<?php
/*
 Template Name: Home Page
 *
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>
<?php get_header(); ?>
	
		<div class="container-fluid slideshow"><!-- .slideshow starts here -->
			<div class="slides">

						<div class="item">
							<img src="<?php the_field('slide_1');?>" class="img-responsive">
					  </div><!-- end .item -->

					<div class="item">
							<img src="<?php the_field('slide_2');?>" class="img-responsive">
					</div><!-- end .item -->

					<div class="item">
							<img src="<?php the_field('slide_3');?>" class="img-responsive">
					  </div><!-- end .item -->

					<div class="item">
							<img src="<?php the_field('slide_4');?>" class="img-responsive">
					</div><!-- end .item -->

			</div><!-- end .slides--> 
			
		</div><!-- end .container-fluid -->


							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<div id="post-<?php the_ID(); ?>" <?php post_class( 'home cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="entry-content cf" itemprop="articleBody">
									<?php the_content(); ?>

								</section>
							</a>

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
									</div>

							<?php endif; ?>



<?php get_footer(); ?>
