<header class="site-header">
	<div class="site-header__inner">
		<h1 class="site-header__logo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<button class="site-header__menu-btn" data-toggle="#mobile-menu" data-toggle-body-class="nav-open" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">Mobile Menu</button>
		<nav class="site-header__nav">
			<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
		</nav>
	</div>
</header>

<div class="mobile-menu" id="mobile-menu">
	<nav class="mobile-menu__nav">
		<button class="mobile-menu__close-btn" data-toggle="#mobile-menu" data-toggle-body-class="nav-open" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">Close Menu</button>
		<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
	</nav>
</div>
