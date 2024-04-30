<?php get_header(); ?>

<h2>Latest Posts</h2>

<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
		<?php the_excerpt(); ?>
	</li>
<?php endwhile; ?>
</ol>

<?php get_footer(); ?>