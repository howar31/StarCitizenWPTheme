<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
		<header class="entry-header">
			<div class="entry-header-content">
				<div class="ttop"></div>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</div>
			<div class="tbottom"></div>
		</header>
		<?php endif; ?>
		<?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() && ! is_category() && ! is_home() ) : ?>
			<div class="wp-post-image-holder">
				<?php the_post_thumbnail(); ?>
				<div class="minor-corner minor-corner-top-left"></div>
				<div class="minor-corner minor-corner-top-right"></div>
				<div class="minor-corner minor-corner-bottom-left"></div>
				<div class="minor-corner minor-corner-bottom-right"></div>
			</div>
		<?php endif; ?>

		<div class="entry-content">
			<div class="corner corner-top-left"></div>
			<div class="corner corner-top-right"></div>
			<div class="corner corner-bottom-left"></div>
			<div class="corner corner-bottom-right"></div>
			<div class="entry-content-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
			</div>
		</div><!-- .entry-content -->
	</article><!-- #post -->
