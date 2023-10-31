<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6"></div>

		<div class="col-md-3">
			<div class="module-10">
				<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5, // Số lượng bài viết mới nhất bạn muốn hiển thị
					'orderby' => 'date',
					'order' => 'DESC',
				);

				$recent_posts = new WP_Query($args);

				if ($recent_posts->have_posts()) :
					echo '<h2>Recent Posts</h2>';
					echo '<ul>';
					while ($recent_posts->have_posts()) : $recent_posts->the_post();
						// Lấy ngày tháng của bài viết


						// Hiển thị tiêu đề bài viết và ngày tháng trong thẻ <li>
						echo '<li>';
						echo '<div class="headlinesdate">';
						echo '<div class="headlinesdm">';
						echo '<div class="headlinesday">' . get_the_date('d') . '</div>';
						echo '<div class="headlinesmonth">' . get_the_date('m') . '</div>';
						echo '</div>';
						echo '<div class="headlinesyear">' . get_the_date('y') . '</div>';
						echo '</div>';
						echo '<div class="headlinestitle">';
						echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
						echo '</div>';
						echo '</li>';
					endwhile;
					echo '</ul>';
					echo '<a class="button-see-all" href="' . get_permalink(get_option('page_for_posts')) . '">XEM TẤT CẢ TIN TỨC</a>';
				endif;

				wp_reset_postdata(); // Đặt lại trạng thái truy vấn
				?>
			</div>
		</div>
	</div>
</div>