<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			<div class="entry-header-content">
				<div class="ttop"></div>

				<?php if ( is_single() ) : ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php else : ?>
				<h1 class="entry-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h1>
				<?php endif; // is_single() ?>
				<?php if ( comments_open() ) : ?><?php endif; // comments_open() ?>
			</div><!-- .entry-header-content -->
			<div class="tbottom"></div>
			<?php if ( ! post_password_required() && ! is_attachment() ) : ?>
				<div class="wp-post-image-holder">
					<?php the_post_thumbnail(); ?>
					<div class="corner corner-top-left"></div>
					<div class="corner corner-top-right"></div>
					<div class="corner corner-bottom-left"></div>
					<div class="corner corner-bottom-right"></div>
				</div>
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<div class="corner corner-top-left"></div>
			<div class="corner corner-top-right"></div>
			<div class="corner corner-bottom-left"></div>
			<div class="corner corner-bottom-right"></div>
			<footer class="entry-meta">
				<div class="meta-info"><?php the_post_author(); ?> 於 <a href="<?php the_post_permalink(); ?>" title="<?php the_post_time(); ?>" rel="bookmark"><time class="entry-date" datetime="<?php the_post_datec(); ?>"><?php the_post_date(); ?></time></a><?php the_post_category(); the_post_tag(); ?></div>
				<div class="meta-source"><?php the_post_source(); ?></div>
			</footer><!-- .entry-meta -->
			<div class="entry-content-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
			</div>
		</div><!-- .entry-content -->
		<?php endif; ?>
	</article><!-- #post -->
