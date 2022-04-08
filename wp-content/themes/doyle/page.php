<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<main class="main content" id="content">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</main>
<?php endwhile; ?>

<?php get_footer(); ?>
