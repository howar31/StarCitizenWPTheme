<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

		<div class="recent-posts">
			<h1 class="recent-posts-head">最新文章</h1>
			<?php query_posts('posts_per_page=7'); ?>
			<ul class="recent-posts-list">
			<?php while (have_posts()) : the_post(); ?>
			<li class="recent-posts-entities">
				<div class="recent-posts-box">
					<div class="recent-posts-thumbnail"><a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
					<div class="recent-posts-info">
						<div class="recent-posts-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="recent-posts-date"><?php echo get_the_date(); ?></div>
					</div>
					<div class="minor-corner minor-corner-top-left"></div>
					<div class="minor-corner minor-corner-top-right"></div>
					<div class="minor-corner minor-corner-bottom-left"></div>
					<div class="minor-corner minor-corner-bottom-right"></div>
				</div>
			</li>
			<?php endwhile; ?>
			</ul>
			<?php wp_reset_query(); ?>
			<div class="corner corner-top-left"></div>
			<div class="corner corner-top-right"></div>
			<div class="corner corner-bottom-left"></div>
			<div class="corner corner-bottom-right"></div>
			<div class="recent-posts-more"><a href="http://starcitizen.howar31.com/allpost/">瀏覽所有文章</a></div>
		</div>
	</div><!-- #primary -->
	
<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>