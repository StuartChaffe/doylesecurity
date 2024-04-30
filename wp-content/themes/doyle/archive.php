<?php get_header(); ?>

<?php if ( have_posts() ): ?>

<h2>Archive</h2>

<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
			<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
	</li>
<?php endwhile; ?>
</ol>

<?php else: ?>

<h2>No posts to display</h2>

<?php endif; ?>

<?php get_footer(); ?>

