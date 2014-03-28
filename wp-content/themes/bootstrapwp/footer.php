<?php
/**
 * Default Footer
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: July 16, 2012
 */
?>
    <!-- End Template Content -->
 <footer>
<div class="container clearfix">
        <p>&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?></p>
<?php if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-content");?>
<p class="visible-phone"><a href="#">Back to Top</a></p>
    </div> <!-- /.container -->
</footer>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
<?php wp_footer(); ?>
  </body>
</html>