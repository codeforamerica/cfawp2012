<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 * pete was here
 */

get_header(); ?>

	<div id="container">
		<div id="content" role="main">

			<div id="post-0" class="post error404 not-found">
				<div class="entry-content">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/pandas.png" alt="" /><h1 class="entry-title"><?php _e( 'Life, Liberty, and the Pursuit...', 'twentyten' ); ?></h1>
					
			        
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help. Or napping.', 'twentyten' ); ?></p>
					<?php get_search_form(); ?>
					<p><em>Image credit: <a href="http://www.mischiefchampion.com/style/p/2010/Aug/life_questions">Mischief Champion</a></em></p>
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #container -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>