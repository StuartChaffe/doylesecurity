<header class="site-header">
	<div class="site-header__inner">
		<h1 class="site-header__logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.svg" alt="Doyle Security logo" /></a></h1>
		<button class="site-header__menu-btn" data-toggle="#mobile-menu" data-toggle-body-class="nav-open" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">Mobile Menu</button>

		<div class="site-header__content">
			<p>Need a Security Solution call 01226 298492</p>
			<nav class="site-header__nav">
				<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
			</nav>
		</div>
	</div>
</header>

<div class="mobile-menu" id="mobile-menu">
	<nav class="mobile-menu__nav">
		<button class="mobile-menu__close-btn" data-toggle="#mobile-menu" data-toggle-body-class="nav-open" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">Close Menu</button>
		<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
	</nav>
</div>
