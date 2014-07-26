<?php // Helper Functions

if ( ! function_exists( 'post_time_author' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function post_time_author() {
		$time_string = '<time class="post-date insulate text-whisper published" datetime="%1$s">%2$s</time>';

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			_x( '%s', 'post date', 'cfa-wp' ),
			$time_string
		);

		$byline = sprintf(
			_x( '%s', 'post author', 'cfa-wp' ),
			'<span class="post-author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '"> by ' . esc_html( get_the_author() ) . '</a></span>'
		);

		if (is_single()) {
			echo '<div class="text-whisper">' . $posted_on . $byline . '<span class="post-share">Share';
				echo '<div class="share-button"><a href="https://twitter.com/share" class="twitter-share-button" data-via="codeforamerica" rel="nofollow">Tweet</a></div>';
				echo '<div class="share-button"><a name="fb_share" type="button_count" href="http://www.facebook.com/sharer.php?link=<?php the_permalink() ?>"" rel="nofollow">Share</a></div>';
			echo '</span></div>';
		}
		else {
			echo '<div class="text-whisper info">' . $posted_on . $byline . '</div>';
		}

	}
endif;

if ( ! function_exists( 'posted_in' ) ) :
	/**
	 * Prints HTML with meta information for the current post (category, tags and permalink).
	 *
	 * @since Twenty Ten 1.0
	 */
	function posted_in() {
		// Retrieves tag list of current post, separated by commas.
		$tag_list = get_the_tag_list( '', ', ' );
		if ( $tag_list ) {
			$posted_in = __( '<a href="%3$s" title="Permalink to %4$s" rel="bookmark">%1$s</a>', 'twentyten' );
		} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
			$posted_in = __( '<a href="%3$s" title="Permalink to %4$s" rel="bookmark">%1$s</a>', 'twentyten' );
		} else {
			$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
		}
		// Prints the string, replacing the placeholders.
		printf(
			$posted_in,
			get_the_category_list( '' ),
			$tag_list,
			get_permalink(),
			the_title_attribute( 'echo=0' )
		);
	}
endif;

function recent_catigories() {
	// get 5 latest posts, display the categories used on those posts (most recent categories)
	global $post;
	$cat_array = array();
	$args=array(
		'post_type'      => 'post',
		'posts_per_page' => 8
	);
	$my_query = null;
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
		while ($my_query->have_posts()) : $my_query->the_post();
			$cat_args=array('orderby' => 'none');
			$cats = wp_get_post_terms( $post->ID , 'category', $cat_args);
			foreach($cats as $cat) {
				$cat_array[$cat->term_id] = $cat->term_id;
			}
		endwhile;
	}

	echo '<ul class="side-list">';

	echo "<li>top Tags</li>";

	if ($cat_array) {
		foreach($cat_array as $cat)  {
			$category = get_term_by('ID',$cat, 'category');
			if ( $category->name != 'News' && $category->name != 'Reviews' && $category->name != 'Specials' && $category->name != 'Featured'){
				echo '<li><a href="' . esc_attr(get_term_link($category, 'category')) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li> ';
			}
		}
	}

	echo '</ul>';

	wp_reset_query();  // Restore global post data stomped by the_post().
}

function recent_bloggers() {
	// get 5 latest posts, display the categories used on those posts (most recent categories)
	global $post;
	$blogger = array();
	$displayed = array();
	$args=array(
		'post_type'      => 'post',
		'posts_per_page' => 10
	);
	$my_query = null;
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
		while ($my_query->have_posts()) : $my_query->the_post();
			$blogger[] = $post->post_author;
		endwhile;
	}

	echo '<ul class="side-list blue">';

	echo "<li>Top Bloggers</li>";

	if ($blogger) {
		foreach($blogger as $author)  {
			if ( ! in_array($author, $displayed)) {
				$name = get_the_author_meta('first_name', $author) . ' ' . get_the_author_meta('last_name', $author);
				echo '<li><a href="' . esc_attr(get_author_posts_url($author)) . '" title="' . sprintf( __( "View all posts in %s" ), $name ) . '" ' . '>' . $name.'</a></li> ';
				$displayed[] = $author;
			}
		}
	}

	echo '</ul>';

	wp_reset_query();  // Restore global post data stomped by the_post().
}

function recent_catigories_by_author($id) {
	// get 5 latest posts, display the categories used on those posts (most recent categories)
	global $post;
	$cat_array = array();
	$args=array(
		'post_type'      => 'post',
		'author'         => $id,
		'posts_per_page' => 10
	);
	$my_query = null;
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
		while ($my_query->have_posts()) : $my_query->the_post();
			$cat_args=array('orderby' => 'none');
			$cats = wp_get_post_terms( $post->ID , 'category', $cat_args);
			foreach($cats as $cat) {
				$cat_array[$cat->term_id] = $cat->term_id;
			}
		endwhile;
	}

	echo '<ul class="side-list">';

	echo "<li>Top Tags By " . get_the_author_meta('first_name', $id) . "</li>";

	if ($cat_array) {
		foreach($cat_array as $cat)  {
			$category = get_term_by('ID',$cat, 'category');
			if ( $category->name != 'News' && $category->name != 'Reviews' && $category->name != 'Specials' && $category->name != 'Featured'){
				echo '<li><a href="' . esc_attr(get_term_link($category, 'category')) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li> ';
			}
		}
	}

	echo '</ul>';

	wp_reset_query();  // Restore global post data stomped by the_post().
}