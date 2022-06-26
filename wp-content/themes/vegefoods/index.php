<?php
// Template Name: Home
get_header();
?>

<section id="home-section" class="hero">
	<div class="home-slider owl-carousel">
		<?php
$sliderArgs = array(
	'post_type' => 'slider',
	'status' => 'publised'
	// Several more arguments could go here. Last one without a comma.
);
$slider_query = new WP_Query($sliderArgs);
while($slider_query->have_posts()):
	$slider_query->the_post();
	?>
		<div class="slider-item" style="background-image:url(<?php echo the_post_thumbnail_url()?>);">
			<div class="slider-overlay" style="padding:0">
				<div class="container">
					<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

						<div class="col-md-12 ftco-animate text-center">
							<!-- <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
	<h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
	<p><a href="#" class="btn btn-primary">View Details</a></p> -->
							<div class="slider-heading subheading">
								<?php the_title()?>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<?php
endwhile;
?>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row no-gutters ftco-services">
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
						<span class="flaticon-shipped"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Free Shipping</h3>
						<span>On order over $100</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
						<span class="flaticon-diet"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Always Fresh</h3>
						<span>Product well package</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
						<span class="flaticon-award"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Superior Quality</h3>
						<span>Quality Products</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
						<span class="flaticon-customer-service"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Support</h3>
						<span>24/7 Support</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-category ftco-no-pt">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6 order-md-last align-items-stretch d-flex">
						<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex"
							style="background-image: url(<?php echo get_template_directory_uri()?>/images/category.jpg);">
							<div class="text text-center">
								<h2>Categories</h2>
								<!-- <p>Protect the health of every home</p> -->
								<p><a href="#" class="btn btn-primary">Shop now</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
							style="background-image: url(<?php echo get_template_directory_uri()?>/images/category-1.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Fruits</a></h2>
							</div>
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end"
							style="background-image: url(<?php echo get_template_directory_uri()?>/images/category-2.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Vegetables</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
					style="background-image: url(<?php echo get_template_directory_uri()?>/images/category-3.jpg);">
					<div class="text px-3 py-1">
						<h2 class="mb-0"><a href="#">Juices</a></h2>
					</div>
				</div>
				<div class="category-wrap ftco-animate img d-flex align-items-end"
					style="background-image: url(<?php echo get_template_directory_uri()?>/images/category-4.jpg);">
					<div class="text px-3 py-1">
						<h2 class="mb-0"><a href="#">Dried</a></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading">Featured Products</span>
				<h2 class="mb-4">Our Products</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php
$wpQueryFeatured = [
	'post_type' => 'product',
	'post_status' => 'publish',
	'meta_query' => array(
		array(
			'key' => 'home_page',
			'value' => '1',
			'compare' => '==',
			'type' => 'NUMERIC' 
			)
			)
		];
		$productData = new WP_Query($wpQueryFeatured);
		while($productData->have_posts()) :
			$productData->the_post();
			$imgPath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
			
			?>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="<?php echo $imgPath[0]?>"
							alt="Colorlib Template">
						<!-- <span class="status">30%</span> -->
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#"><?php the_title()?></a></h3>
						<!-- <div class="d-flex">
							<div class="pricing">
								<p class="price"><span class="mr-2 price-dc">$120.00</span><span
										class="price-sale">$80.00</span></p>
							</div>
						</div> -->
						<div class="bottom-area d-flex px-3">
							<div class="m-auto d-flex">
								<a href="#" class="heart d-flex justify-content-center align-items-center ">
									<span>
										<i class="ion-md-information-circle-outline"></i>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		endwhile;
		?>
		</div>
	</div>
</section>


<?php
		include "testimonials-section.php";
		?>

<?php
		// include_once 'footer.php';
		get_footer();
		?>