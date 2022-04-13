<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<main id="content">
	<?php the_content(); ?>
	<h1>Contact us</h1>
	<h2>Contact us</h2>
	<h3>Contact us</h3>
	<h4>Contact us</h4>
	<h5>Contact us</h5>
	<h6>Contact us</h6>
	<p>Quisque massa ipsum, <strong>scelerisque iaculis</strong> metus a, ultricies hendrerit nibh. Duis rhoncus consequat purus, ultrices feugiat arcu mollis quis. Maecenas ut enim facilisis, facilisis mi vitae, ornare ligula. Aenean tempor porta turpis ac blandit.</p>
	<p>Wipsum, scelerisque iaculis metus a, <a href="">ultricies hendrerit</a> nibh. Duis Toncus consequat purus, ultrices feugiat arcu mollis quis. Maecenas ut enim facilisis, facilisis mi vitae, ornare ligula. Aenean tempor porta turpis ac blandit. empor porta turpis ac blandiQuisque massa ipsum, scelerisque iaculis metus a, ultricies hendrerit nibh.</p>

	<button>Test</button>
	<a href="" class="btn">Test</a>
	<button class="btn btn--secondary">Test</button>
	<a href="" class="btn btn--secondary">Test</a>
	<ul>
		<li>Test</li>
		<li>Test</li>
		<li>Test</li>
	</ul>
</main>
<?php endwhile; ?>

<?php get_footer(); ?>
