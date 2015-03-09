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
?>