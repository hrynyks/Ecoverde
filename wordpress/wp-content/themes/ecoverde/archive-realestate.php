<?php get_header();?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
<!--			<div class="col-md-9 ftco-animate pb-0 text-center">-->
<!--				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Properties <i class="fa fa-chevron-right"></i></span></p>-->
<!--				<h1 class="mb-3 bread">Properties</h1>-->
<!--			</div>-->
		</div>
	</div>
</section>



<section class="ftco-section goto-here">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 heading-section text-center ftco-animate mb-5">
				<span class="subheading">What we offer</span>
				<h2 class="mb-2">Properties</h2>
			</div>
		</div>
		<div class="row">
			<?php
			if (have_posts() ) {
				while (have_posts() ) {
					the_post();
					?>
					<div class="col-md-4">
						<div class="property-wrap ftco-animate">
							<a href="<?php the_permalink();?>" class="img" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>);">
								<div class="rent-sale">
									<span class="sale"><?php the_field( 'status' ); ?></span>
								</div>
								<p class="price"><span class="orig-price">$<?php the_field( 'price' ); ?></span></p>
							</a>
							<div class="text">
								<ul class="property_list">
									<li>Bedrooms: <?php the_field( 'bedrooms' ); ?></li>
									<li>Bathrooms: <?php the_field( 'bathrooms' ); ?></li>
									<li> <?php the_field( 'square' ); ?> sqft</li>
								</ul>
								<h3><a href="#"><?php the_title() ?></a></h3>
								<span class="location"><?php the_excerpt(); ?></span>
							</div>
						</div>
					</div>
					<?php
				}
			} else {
				?>
				<p class="services-now">Отзывов пока нет</p>
			<?php }
			wp_reset_postdata();
			?>
		</div>
		<?php
		$args = array(
			'prev_text' => __('<'),
			'next_text' => __('>'),
		);
		?>

		<div class="row mt-5">
			<div class="col text-center">
				<div class="block-27">
					<?php the_posts_pagination($args); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>