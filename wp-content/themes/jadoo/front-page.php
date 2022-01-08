<?php
get_header() ?>

<div class="hero">
	<?php get_template_part('template-parts/content', 'header') ?>

	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-6 banner__text">
					<?php
					if (get_field('banner__before-title')) : ?>
						<div class="banner__title-before">
							<?php the_field('banner__before-title') ?>
						</div>
					<?php
					endif ?>

					<div class="banner__title">
						<h1>
							<?php echo (get_field('banner__title') ? get_field('banner__title') : the_title()) ?>
						</h1>
					</div>

					<?php
					if (get_field('banner__description')) : ?>
						<div class="banner__description">
							<?php the_field('banner__description') ?>
						</div>
					<?php
					endif ?>

					<div class="banner__bottom">
						<?php
						if (get_field('banner__btn-link')) : ?>
							<a href="<?php the_field('banner__btn-link') ?>" class="site-btn">Find out more</a>
						<?php
						endif ?>

						<?php
						if (get_field('banner__video')) : ?>
							<a data-fancybox href="<?php the_field('banner__video') ?>" class="play-btn">
								<img class="svg" src="<?php bloginfo('template_url') ?>/assets/images/play.svg" alt="play demo">
								Play demo
							</a>
						<?php
						endif ?>
					</div>
				</div>

				<div class="col-md-4 col-lg-6 banner__img">
					<img src="<?php bloginfo('template_url') ?>/assets/images/banner-image.png" alt="travel">
				</div>
			</div>
		</div>
	</section>
</div>

<main>
	<section class="categories">
		<div class="container">
			<div class="row">
				<img class="categories__decor" src="<?php bloginfo('template_url') ?>/assets/images/cat-decor.svg" alt="decor">

				<div class="col-lg-12 section__before-title">
					<?php the_field('cat__before-title') ?>
				</div>

				<h2 class="col-lg-12 section__title">
					<?php the_field('cat__title') ?>
				</h2>

				<?php
				$categories = get_field('cat__categories');
				if ($categories) :
					$i = 0;
					foreach ($categories as $cat) : ?>
						<div class="col-md-6 col-lg-3 categories__item <?php echo ($i == 1 ? 'categories__item_active' : '') ?>">
							<div>
								<div class="categories__icon">
									<img src="<?php echo $cat['cat__categories_icon']['url'] ?>" alt="<?php echo $cat['cat__categories_icon']['alt'] ?>">
								</div>

								<div class="categories__name">
									<?php echo $cat['cat__categories_title'] ?>
								</div>

								<div class="categories__text">
									<?php echo $cat['cat__categories_text'] ?>
								</div>
							</div>
						</div>
				<?php
						$i++;
					endforeach;
				endif; ?>
			</div>
		</div>
	</section>

	<section class="destinations">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 section__before-title">
					<?php the_field('destinations__before-title') ?>
				</div>

				<h2 class="col-lg-12 section__title">
					<?php the_field('destinations__title') ?>
				</h2>

				<?php
				$destinations = get_field('destinations');
				if ($destinations) :
					foreach ($destinations as $item) : ?>
						<div class="col-md-6 col-lg-4 destinations__item">
							<a href="<?php echo $item['destinations_link'] ?>" style="background: url(<?php echo $item['destinations_image']["sizes"]['medium'] ?>) no-repeat center/cover">
								<div class="destinations__text">
									<div>
										<span><?php echo $item['destinations_name'] ?></span>
										<span>$<?php echo $item['destinations_coast'] ?></span>
									</div>

									<div>
										<img src="<?php bloginfo('template_url') ?>/assets/images/point.svg" alt="navigation"> <?php echo $item['destinations_duration'] ?>
									</div>
								</div>
							</a>
						</div>
				<?php
					endforeach;
				endif; ?>
			</div>
		</div>
	</section>

	<section class="etaps">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section__before-title">
						<?php the_field('book__before-title') ?>
					</div>

					<h2 class="section__title">
						<?php the_field('book__title') ?>
					</h2>

					<?php
					$etaps = get_field('book__etaps');
					if ($etaps) :
						foreach ($etaps as $item) : ?>
							<div class="etaps__item">
								<div>
									<img src="<?php echo $item['book__etaps_icon']['url'] ?>" alt="<?php echo $item['book__etaps_icon']['alt'] ?>">
								</div>

								<div>
									<div><?php echo $item['book__title'] ?></div>
									<div><?php echo $item['book__text'] ?></div>
								</div>
							</div>
					<?php
						endforeach;
					endif ?>
				</div>

				<?php
				$trip = get_field('etaps__trip');
				if ($trip) : ?>
					<div class="col-lg-6 etaps-trip">
						<div>
							<div class="etaps-trip__image" style="background: url(<?php echo $trip['etaps__trip_image']['url'] ?>) no-repeat center/cover"></div>

							<div class="etaps-trip__name">
								<?php echo $trip['etaps__trip_name'] ?>
							</div>

							<div class="etaps-trip__info">
								<?php echo $trip['etaps__trip_dates'] ?> | <?php echo $trip['etaps__trip_by'] ?>
							</div>

							<div class="etaps-trip__links">
								<a href="#"><img src="<?php bloginfo('template_url') ?>/assets/images/trip1.svg" alt="img"></a>
								<a href="#"><img src="<?php bloginfo('template_url') ?>/assets/images/trip2.svg" alt="img"></a>
								<a href="#"><img src="<?php bloginfo('template_url') ?>/assets/images/trip3.svg" alt="img"></a>
							</div>

							<div class="etaps-trip__quantity">
								<span>
									<img src="<?php bloginfo('template_url') ?>/assets/images/build.svg" alt="img">
									<?php echo $trip['etaps__trip_quantity'] ?>
								</span>

								<a href="#">
									<img src="<?php bloginfo('template_url') ?>/assets/images/heart.svg" alt="heart">
								</a>
							</div>
						</div>
					</div>
				<?php
				endif ?>
			</div>
		</div>
	</section>

	<section class="reviews">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-xl-5">
					<div class="section__before-title">
						<?php the_field('reviews__before-title') ?>
					</div>

					<h2 class="section__title">
						<?php the_field('reviews__title') ?>
					</h2>
				</div>

				<?php
				$reviews = get_field('reviews');
				if ($reviews) : ?>
					<div class="col-lg-12 col-xl-7 reviews-slider_container">
						<div id="reviewsSlider" class="reviews-slider">
							<?php
							foreach ($reviews as $item) : ?>
								<div class="reviews-slider__item">
									<div>
										<div class="reviews-slider__photo" style="background: url(<?php echo $item['reviews_photo']["sizes"]["thumbnail"] ?>) no-repeat center/cover"></div>

										<div class="reviews-slider__text">
											<?php echo $item['reviews_text'] ?>
										</div>

										<div class="reviews-slider__author">
											<b>
												<?php echo $item['reviews_name'] ?>
											</b>
											<?php echo $item['reviews_position'] ?>
										</div>
									</div>
								</div>
							<?php
							endforeach; ?>
						</div>
					</div>
				<?php
				endif ?>
			</div>
		</div>
	</section>

	<?php
	$partners = get_field('partners__slider');
	if ($partners) : ?>
		<sections class="partners">
			<div class="container">
				<div class="row">
					<div id="partnersSlider" class="col-lg-12 partners-slider">
						<?php
						foreach ($partners as $logo) : ?>
							<div class="partners-slider__item">
								<div><img src="<?php echo $logo['partners__slider_img']['url'] ?>" alt="<?php echo $logo['partners__slider_img']['alt'] ?>"></div>
							</div>
						<?php
						endforeach ?>
					</div>
				</div>
			</div>
		</sections>
	<?php
	endif ?>

	<section class="subscribe">
		<div class="container">
			<div class="row">
				<img class="subscribe-block__decor3" src="<?php bloginfo('template_url') ?>/assets/images/subscribe-decor3.svg" alt="decor">

				<div class="col-lg-12 subscribe-block">
					<div>
						<img class="subscribe-block__decor" src="<?php bloginfo('template_url') ?>/assets/images/subscribe-decor1.svg" alt="decor">
						<img class="subscribe-block__decor2" src="<?php bloginfo('template_url') ?>/assets/images/subscribe-decor2.svg" alt="decor">
						<img class="subscribe-block__icon" src="<?php bloginfo('template_url') ?>/assets/images/tg.svg" alt="icon">

						<h2>
							<?php the_field('subscribe__title') ?>
						</h2>

						<?php 
						if(get_locale() == 'es_ES'):
							echo do_shortcode('[contact-form-7 id="122" title="Subscribe (ES)"]');
						else: 
							echo do_shortcode('[contact-form-7 id="89" title="Subscribe (EN)"]');
						endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer() ?>