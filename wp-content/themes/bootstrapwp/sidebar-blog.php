<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */
?>
<div id="sidebar" class="span4">
		<div class="sidebar-nav">
            <?php
    if ( function_exists('dynamic_sidebar')) dynamic_sidebar("sidebar-posts");
?>
	</div><!--/ .sidebar-nav -->
</div><!-- /.span4 -->