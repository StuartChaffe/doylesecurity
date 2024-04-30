<?php get_header(); ?>

<?php if ( have_posts() ): ?>

<h2>Search Results for '<?php echo get_search_query(); ?>'</h2>

<ol class="search-results">
<?php while ( have_posts() ) : the_post(); ?>
	<li>
			<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
	</li>
<?php endwhile; ?>
</ol><!-- /search-results -->

<?php else: ?>
	
<h2>No results found for '<?php echo get_search_query(); ?>'</h2>

<?php endif; ?>

<?php get_footer(); ?>