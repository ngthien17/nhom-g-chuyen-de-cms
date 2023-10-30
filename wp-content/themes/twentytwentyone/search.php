<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if (have_posts()) {
?>
	<header class="page-header alignwide">
		<h1 class="page-title">
			<?php
			printf(
				/* translators: %s: Search term. */
				esc_html__('Results for "%s"', 'twentytwentyone'),
				'<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
			);
			?>
		</h1>
	</header><!-- .page-header -->

	<div class="search-result-count default-max-width">
		<?php
		printf(
			esc_html(
				/* translators: %d: The number of search results. */
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'twentytwentyone'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
	<?php
	// Start the Loop.
	while (have_posts()) {
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part('template-parts/content/content-excerpt', get_post_format());
	} // End the loop.

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

	// If no content, include the "No posts found" template.
} else {
	get_template_part('template-parts/content/content-none');
}
	?>
	</div><!-- .search-result-count -->
	<div class="module-15 default-max-width py-4">
		<h4>Lastest News</h4>
		<?php
		// Lấy danh sách các bài viết từ widget "Latest Posts"
		$recent_posts = wp_get_recent_posts(array(
			'numberposts' => 5,  // Số lượng bài viết bạn muốn hiển thị
			'post_status' => 'publish'
		));

		// Duyệt qua danh sách bài viết và hiển thị thông tin
		?>
		<ul class="timeline">
			<?php foreach ($recent_posts as $post) { ?>

				<li class="post-card">
					<a class="float-left" href="<?php echo get_permalink($post['ID']) ?>"><?php echo $post['post_title']  ?></a>
					<a class="float-right" href="#"><?php echo date('d F, Y', strtotime($post['post_date'])) ?></a>
					<br>
					<?php
					if (strlen($post['post_content']) > 251) { ?>
						<p><?php echo substr($post['post_content'], 0, 251) ?>... </p>
					<?php } else { ?>
						<p><?php echo $post['post_content'] ?></p>
					<?php
					}
					?>
				</li>

			<?php
			}
			?>
		</ul>
	</div>
	<?php

	get_footer();
