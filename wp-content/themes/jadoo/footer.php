<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="footer__logo">
					<a href="<?php echo get_home_url() ?>">
						<img src="<?php the_field('logo', 'options') ?>" alt="<?php bloginfo('name') ?>">
					</a>
					<div>
						<?php bloginfo('description') ?>
					</div>
				</div>
			</div>

			<div class="col-lg-6 footer__menus">
				<div class="footer__menu">
					<div class="footer-title">Company</div>

					<?php
					wp_nav_menu([
						'theme_location'  => 'footer-company',
						'menu'            => '',
						'container'       => false
					]);
					?>
				</div>

				<div class="footer__menu">
					<div class="footer-title">Contact</div>

					<?php
					wp_nav_menu([
						'theme_location'  => 'footer-contact',
						'menu'            => '',
						'container'       => false
					]);
					?>
				</div>

				<div class="footer__menu">
					<div class="footer-title">More</div>

					<?php
					wp_nav_menu([
						'theme_location'  => 'footer-more',
						'menu'            => '',
						'container'       => false
					]);
					?>
				</div>
			</div>

			<div class="col-lg-3">
				<?php
				$social = get_field('social', 'options');
				if ($social) : ?>
					<div class="footer__social">
						<?php if ($social['facebook']) ?><a href="<?php echo $social['facebook'] ?>"><img src="<?php bloginfo('template_url') ?>/assets/images/f.svg" alt="facebook"></a>
						<?php if ($social['instagram']) ?><a href="<?php echo $social['instagram'] ?>"><img src="<?php bloginfo('template_url') ?>/assets/images/i.png" alt="instagram"></a>
						<?php if ($social['tweeter']) ?><a href="<?php echo $social['tweeter'] ?>"><img src="<?php bloginfo('template_url') ?>/assets/images/t.svg" alt="twitter"></a>
					</div>
				<?php
				endif ?>

				<div class="footer__stores">
					<div>
						<?php
						if (get_locale() == 'es_ES') {
							echo 'Descubre nuestra aplicación';
						} else {
							echo 'Discover our app';
						} ?>

					</div>

					<div>
						<?php if (get_field('google_play_link', 'options')) ?><a href="<?php echo get_field('google_play_link', 'options') ?>"><img src="<?php bloginfo('template_url') ?>/assets/images/GooglePlay.svg" alt="GooglePlay"></a>
						<?php if (get_field('apple_store_link', 'options')) ?><a href="<?php echo get_field('apple_store_link', 'options') ?>"><img src="<?php bloginfo('template_url') ?>/assets/images/PlayStore.svg" alt="AppStore"></a>
					</div>
				</div>
			</div>

			<div class="col-lg-12 footer__bottom">
				<?php
				if (get_locale() == 'es_ES') {
				echo 'Todos los derechos';
				} else {
				echo 'All rights';
				} ?>
				<a href="mailto:<?php the_field('e-mail', 'options') ?>"><?php the_field('e-mail', 'options') ?></a>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>