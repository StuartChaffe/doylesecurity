<footer class="site-footer">
	<div class="site-footer__inner">
		<div class="site-footer__item">
			<p><strong>Contact</strong></p>

			<ul>
				<li><p>T: <a href="tel:<?php the_field('company_telephone', 'options'); ?>"><?php the_field('company_telephone', 'options'); ?></a></p></li>
				<li><p>E: <a href="mailto:<?php the_field('company_email', 'options'); ?>"><?php the_field('company_email', 'options'); ?></a></p></li>
			</ul>

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
			<p><strong><?php the_field('services_title', 'options'); ?></strong></p>
			<?php 
				$urls = get_field('services_links', 'options');
			?>
			<?php if($urls) { ?>
				<ul>
					<?php foreach( $urls as $url ):
						$title = get_the_title($url);
					?>
					<li>
						<a href="<?php echo get_permalink($url); ?>"> <?php echo ( $title ); ?></a>
					</li>
					<?php endforeach; ?>
				</ul>
			<?php } ?>
		</div>

		<div class="site-footer__item">
			<p><strong><?php the_field('useful_title', 'options'); ?></strong></p>
			<?php 
				$urls = get_field('useful_links', 'options');
			?>
			<?php if($urls) { ?>
				<ul>
					<?php foreach( $urls as $url ):
						$title = get_the_title($url);
					?>
					<li>
						<a href="<?php echo get_permalink($url); ?>"> <?php echo ( $title ); ?></a>
					</li>
					<?php endforeach; ?>
				</ul>
			<?php } ?>
		</div>

		<div class="site-footer__item">
			<p><strong><?php the_field('company_title', 'options'); ?></strong></p>
			<?php 
				$urls = get_field('company_links', 'options');
			?>
			<?php if($urls) { ?>
				<ul>
					<?php foreach( $urls as $url ):
						$title = get_the_title($url);
					?>
					<li>
						<a href="<?php echo get_permalink($url); ?>"> <?php echo ( $title ); ?></a>
					</li>
					<?php endforeach; ?>
				</ul>
			<?php } ?>
		</div>
		<div class="site-footer__copy">
			<p><?php echo date('Y'); ?> &copy; Copyright <?php the_field('footer_copy', 'options'); ?></p>

			<p>Website by <a href="https://www.vividcreative.com/" target="_blank">Vivid</a></p>
		</div>
	</div>
</footer>