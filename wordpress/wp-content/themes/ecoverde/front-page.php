<?php get_header(); ?>
	<!-- END nav -->
	<section class="hero-wrap"
	         style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/images/bg_1.jpg');"
	         data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center">
				<div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
					<div class="text">
						<h1 class="mb-4">Find The Perfect <br>House From Your Area.</h1>
						<p style="font-size: 18px;">From as low as $20 A small river named Duden flows by their place
							and
							supplies it with the necessary regelialia.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">What we offer</span>
					<h2 class="mb-2">Featured Properties</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-properties owl-carousel">
						<?php
						global $post;
						$query = new WP_Query( [
							'posts_per_page' => - 1,
							'post_type'      => 'realestate',
							'order'          => 'ASC'
						] );
						?>
						<?php
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								?>

								<div class="item">
									<div class="property-wrap ftco-animate">
										<a href="<?php the_permalink();?>" class="img"
                                           style="background-image: url(<?php echo get_the_post_thumbnail_url( $query -> ID); ?>)">
											<div class="rent-sale">
												<span class="<?php
												$class = get_field('status');
												echo $class;
												?>"><?php the_field( 'status' ); ?></span>
											</div>
											<p class="price"><span
													class="orig-price">$<?php the_field( 'price' ); ?><small> / mo</small></span>
											</p>
										</a>
										<div class="text">
											<ul class="property_list">
												<li>Bedrooms: <?php the_field( 'bedrooms' ); ?></li>
												<li>Bathrooms: <?php the_field( 'bathrooms' ); ?></li>
												<li> <?php the_field( 'square' ); ?> sqft</li>
											</ul>
											<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
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
				</div>
			</div>
		</div>
	</section>


<?php
get_footer();
?>