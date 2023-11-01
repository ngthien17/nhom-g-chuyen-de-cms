<?php

/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= (true === get_theme_mod('display_title_and_tagline', true)) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu('primary') ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo esc_attr($wrapper_classes); ?>">
	<nav class="navbar navbar-expand-lg bg-body-tertiary w-100">
		<?php get_template_part('template-parts/header/site-branding'); ?>
 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0 menu-nav">
			<li class="nav-item">
				<a class="menu-button dropdown-toggle active" href="." <?php if (is_home()) {
																			echo 'style="background-color: #e7e7e7;"';
																		} ?>>
					<span>Home</span>
				</a>
			</li>
			<form method="get" class="searchform" action="<?php echo home_url('/'); ?>">
				<input type="text" class="search-input" name="s" placeholder="Search" />
				<input type="submit" class="search-submit" name="submit" value="Submit" />
			</form>
			<?php get_template_part('template-parts/header/site-nav'); ?>
			<div class="menu-func">
				<a class="menu-button" id="menuButton" type="button">
					<i class="fa-solid fa-ellipsis"></i>
					<span>Menu</span>
				</a>
				<a class="menu-button" id="searchButton" href="<?php echo get_search_link(); ?>">
					<i class="fa fa-search" aria-hidden="true"></i>
					<span>Search</span>
				</a>
				<li class="nav-item">
					<div class="dropdown">
						<a class="dropdown-toggle menu-button" id="accountDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa fa-user-circle-o"></i>
							<span>Account
								<span class="caret"></span>
							</span>
						</a>
						<ul class="dropdown-menu">
							<?php
							if (is_user_logged_in()) {
							?>
								<li><a class="dropdown-item" href="<?php echo wp_logout_url(); ?>">Logout</a></li>
							<?php
							} else {
							?>
								<li><a class="dropdown-item" href="<?php echo wp_login_url(); ?>">Login</a></li>
							<?php
							}
							?>
						</ul>
					</div>
				</li>
			</div>
		</ul>
    </div>
	</nav>
</header><!-- #masthead -->
