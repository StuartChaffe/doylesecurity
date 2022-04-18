<footer class="site-footer">
	<div class="site-footer__inner">
		<div class="site-footer__item">
			<p><strong>Contact</strong></p>

			<p>T: 01226 298492</p>
			<p>E: office@doylesecurity.co.uk</p>

			<ul class="social-links">
			<?php if(get_field('twitter', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('twitter', 'options'); ?>" class="social-links__link"><?php echo get_icon('twitter'); ?></a></li>
			<?php endif; ?>
			<?php if(get_field('facebook', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('facebook', 'options'); ?>" class="social-links__link"><?php echo get_icon('facebook'); ?></a></li>
			<?php endif; ?>
			<?php if(get_field('instagram', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('instagram', 'options'); ?>" class="social-links__link"><?php echo get_icon('instagram'); ?></a></li>
			<?php endif; ?>
			<?php if(get_field('youtube', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('youtube', 'options'); ?>" class="social-links__link"><?php echo get_icon('youtube'); ?></a></li>
			<?php endif; ?>
			<?php if(get_field('linkedin', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('linkedin', 'options'); ?>" class="social-links__link"><?php echo get_icon('linkedin'); ?></a></li>
			<?php endif; ?>
			</ul>
		</div>
		<div class="site-footer__item">
			<p><strong>Services</strong></p>
			<ul>
				<li><a href="">Manned Services</a></li>
				<li><a href="">Electronic Security</a></li>
			</ul>
		</div>

		<div class="site-footer__item">
			<p><strong>Useful links</strong></p>
			<ul>
				<li><a href="">FAQ</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="">Accreditations & Partners</a></li>
				<li><a href="">Employee Login</a></li>
			</ul>
		</div>

		<div class="site-footer__item">
			<p><strong>Company</strong></p>
			<ul>
				<li><a href="">Complaints Policy</a></li>
				<li><a href="">Privacy Policy</a></li>
				<li><a href="">Cookie Policy</a></li>
			</ul>
		</div>
		<div class="site-footer__copy">
			<p><?php echo date('Y'); ?> &copy; Copyright Doyle Security Ltd Company no. 7806296</p>
		<div>
	</div>
</footer>