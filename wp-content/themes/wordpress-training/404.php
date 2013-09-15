<?php
/**
 * The template for displaying 404 pages (Not Found).
 * @package BEAUTIFY
 * Author: Mr Rony<mrtrandangtrinh@gmail.com>
 */

get_header();
get_sidebar('banner'); ?>
<div class="container">
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<article id="post-0" class="post error404 no-results not-found">
				<div class="entry-header">
					<h1 class="entry-title"><?php _e( 'Not Found', 'twentytwelve' ); ?></h1>
				</div>

				<div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwelve' ); ?></p>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
                <?php get_search_form(); ?>
	</div><!-- #primary -->
        
</div>

<?php 
get_footer(); 
?>