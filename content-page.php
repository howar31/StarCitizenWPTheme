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
			<?php the_post_thumbnail(); ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
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
