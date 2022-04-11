<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<h1>Contact us</h1>
<h2>Contact us</h2>
<h3>Contact us</h3>
<h4>Contact us</h4>
	<main class="main content" id="content">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</main>
<?php endwhile; ?>

<?php get_footer(); ?>
