<form action="<?php echo home_url( '/' ); ?>" method="get" class="search-form">
	<label for="search" class="sr-only">Search</label>
	<input type="text" name="s" id="search" class="search-form__input" placeholder="Search by keyword" value="<?php the_search_query(); ?>" />
	<button type="submit" class="search-form__submit"><span class="sr-only">Search</span><?php echo get_icon('search'); ?></button>
</form>
