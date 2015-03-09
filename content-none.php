<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-0" class="post no-results not-found">
		<header class="entry-header">
			<h1 class="entry-title error-title">資料庫關閉整建中</h1>
		</header>

		<div class="entry-content">
			<p class="error-msg">抱歉，您所查詢的資料庫正在進行整建，目前關閉中無法檢閱，造成不便請見諒！</p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-0 -->
