<?php
function twentytwelve_entry_meta() {
	$categories_list = get_the_category_list( __( ', ', 'twentytwelve' ) );
	$tag_list = get_the_tag_list( '', __( ', ', 'twentytwelve' ) );
	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);
	$author = sprintf( '%1$s', get_the_author());

	printf('%1$s 於 %2$s', $author, $date);
}

function the_post_author() {
	printf(get_the_author());
}
function the_post_category() {
	if (get_the_category_list( __( ', ', 'twentytwelve' ) )) {
		printf(' » %1$s', get_the_category_list( __( '、', 'twentytwelve' ) ));
	}
}
function the_post_tag() {
	if (get_the_tag_list( '', __( ', ', 'twentytwelve' ) )) {
		printf(' (%1$s)', get_the_tag_list( '', __( '、', 'twentytwelve' ) ));
	}
}
function the_post_date() {
	printf(esc_html( get_the_date() ));
}
function the_post_datec() {
	printf(	esc_attr( get_the_date( 'c' ) ));
}
function the_post_time() {
	printf(esc_attr( get_the_time() ));
}
function the_post_permalink() {
	printf(esc_url( get_permalink() ));
}
function the_post_source() {
	global $post;
	$output = esc_url( get_post_meta($post->ID, 'source', true) );
	if ($output) {
		printf( '<div class="source">原文網址 » <a href="%1$s" target="_blank">%1$s</a></div>', $output );
	}
	$output = esc_attr( get_post_meta($post->ID, 'source_date', true) );
	if ($output) {
		$output = date("Y年 m月 d日", strtotime($output));
		printf( '<div class="source_date">原文時間 » <time datetime="%1$s">%2$s</time></div>', $output, $output );
	}
}

function custom_excerpt_more( $more ) {
	return ' ...';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );
?>