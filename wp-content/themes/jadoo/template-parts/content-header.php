<header>
	<div class="container">
		<div class="row">
			<div class="col-8 col-lg-3 col-md-6">
				<a href="<?php echo get_home_url() ?>">
					<img class="svg" src="<?php echo (get_field('logo__header', 'options') ? get_field('logo__header', 'options') : get_field('logo', 'options')) ?>" alt="<?php bloginfo('name') ?>">
				</a>
			</div>

			<div class="col-4 col-md-6 header-burger">
				<a id="headerBurger" href="javascript:void(0)" class="burger">
					<span></span>
					<span></span>
					<span></span>
				</a>
			</div>

			<div class="col-lg-9 header__options">

				<?php
				wp_nav_menu([
					'theme_location'  => 'header-menu',
					'container'       => 'div',
					'container_class' => 'header__menu',
				]);
				?>

				<div class="header__options_more">
					<div class="header__login">
						<a href="#">
							<?php
							if (get_locale() == 'es_ES') {
								echo 'Acceso';
							} else {
								echo 'Login';
							} ?>

						</a>
					</div>
					<div class="header__btn">
						<a href="#">
							<?php
							if (get_locale() == 'es_ES') {
								echo 'Inscribirse';
							} else {
								echo 'Sign up';
							} ?>
							
						</a>
					</div>
					<div class="header__language">
						<?php pll_the_languages([
							'dropdown' => 1
						]) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>