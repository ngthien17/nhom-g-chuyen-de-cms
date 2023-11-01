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
        <style>
            .module-13 {
                border-left: 2px solid #6091ba;
                background: #fff;
                -moz-box-shadow: 0 0 5px 0 #e8e8e8;
                box-shadow: 0 0 5px 0 #e8e8e8;
                -moz-border-radius: 0;
                -ms-border-radius: 0;
                -o-border-radius: 0;
                border-radius: 0;
                background-clip: padding-box;
                padding: 15px;
                border: none;
                /* đường thẳng bên trái */
                border-left: 2px solid #6091ba;
                margin-bottom: 30px;
                margin-left: 12px;
            }

            .module-13 h2 {
                font-size: 24px;
                font-weight: 400;
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                color: #337ab7;
                padding-bottom: 20px;
                border-bottom: 1px solid #e0e5e9;
                margin-bottom: 25px;
            }

            .module-13 h4 {
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            ;
                font-weight: 500;
                line-height: 1.1;
                color: inherit;
                font-size: 16px;
                margin-top: 10px;
                margin-bottom: 10px;
            }

            .module-13 hr {
                border: 0;
                border-top: 2px solid #999eab;
                margin: 0;
                width: 45px;
                margin-bottom: 10px;
                opacity: 1;
            }

            .module-13 img {
                width: 100%;
                height: auto;
            }

            .module-13 p {
                font-size: 14px;
            }
        </style>
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
<div class="row">
    <div class="col-md-3">
        <div class="module-13">
            <h2>Trang mới nhất</h2>
            <?php
            $args = array(
                'post_type' => 'page',
                'posts_per_page' => 3,
                // trang mới nhất sẽ hiển thị trước.
                'order' => 'DESC',
                'orderby' => 'date',
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $title = get_the_title();
                    $content = wp_trim_words(get_the_content(), 30); // Giới hạn nội dung 30 từ
                    $thumbnail = get_the_post_thumbnail(get_the_ID()); // Lấy ảnh đại diện nhỏ

                    // Hiển thị thông tin trang
                    echo '<h4>' . $title . '</h4>';
                    echo '<hr>';
                    echo $thumbnail; // Hiển thị ảnh đại diện
                    echo '<p>' . $content . '</p>';
                }
                wp_reset_postdata();
            }
            ?>
        </div>
    </div>
    <!-- module 13 (pages) -->


    <!-- module 5 (search result) -->
    <div class="col-md-6">
        <div class="container">
            <?php if (have_posts()) { ?>
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
                </div><!-- .search-result-count -->

                <?php
                // Start the Loop.
                while (have_posts()) {
                    the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part('template-parts/content/content-excerpt-search', get_post_format());
                } // End the loop.

                // Previous/next page navigation.
                twenty_twenty_one_the_posts_navigation();

                // If no content, include the "No posts found" template.
            } else {
                get_template_part('template-parts/content/content-none');
            }
            ?>
            <!-- module 5 (search result) -->
        </div>
    </div>
    <div class="col-md-3">

    </div>
</div>

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

	get_footer();

