<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<main id="content">
	<?php the_content(); ?>
</main>
<?php endwhile; ?>

<?php get_footer(); ?>
