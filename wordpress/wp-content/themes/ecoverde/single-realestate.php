<?php
get_header();
?>

<?php
the_post();
?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/images/bg_1.jpg');');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate pb-0 text-center">
				<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
				<h1 class="mb-3 bread">Property Details</h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-property-details">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="property-details">
					<div class="img" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>);">

					</div>
					<div class="text">
						<span class="subheading"><?php the_excerpt(); ?></span>
						<h2><?php the_title()?></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 pills">
				<div class="bd-example bd-example-tabs">
					<div class="d-flex">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

							<li class="nav-item">
								<a class="nav-link active" id="pills-description-tab" data-toggle="pill"
								   href="#pills-description" role="tab" aria-controls="pills-description"
								   aria-expanded="true">Features</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill"
								   href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
								   aria-expanded="true">Description</a>
							</li>

						</ul>
					</div>

					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-description" role="tabpanel"
						     aria-labelledby="pills-description-tab">
							<div class="row">
								<div class="col-md-4">
									<ul class="features">
										<li class="check"><span class="fa fa-check-circle"></span>Lot Area: <?php the_field('square');?> sq ft
										</li>
										<li class="check"><span class="fa fa-check-circle"></span>Price: <?php the_field('price');?>$ / month
										</li>


									</ul>
								</div>
								<div class="col-md-4">
									<ul class="features">
										<li class="check"><span class="fa fa-check-circle"></span>Bedrooms: <?php the_field('bedrooms');?></li>
										<li class="check"><span class="fa fa-check-circle"></span>Type: <?php the_field('status');?></li>


									</ul>
								</div>
								<div class="col-md-4">
									<ul class="features">
										<li class="check"><span class="fa fa-check-circle"></span>Bathrooms: <?php the_field('bathrooms');?></li>
										<li class="check"><span class="fa fa-check-circle"></span>Garages: <?php the_field('garages');?></li>

									</ul>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="pills-manufacturer" role="tabpanel"
						     aria-labelledby="pills-manufacturer-tab">
						<?php the_content();?>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
?>
