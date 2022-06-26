<?php
$testiArgs = array(
    'post_type' => 'testimonial',
	'status' => 'publised'
    // Several more arguments could go here. Last one without a comma.
);
$testimonial_query = new WP_Query($testiArgs);

?>
<section class="ftco-section testimony-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<span class="subheading">Testimonials</span>
				<h2 class="mb-4">Our satisfied customer says</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
					the blind texts. Separated they live in</p>
			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel">
					<?php
                    while ($testimonial_query->have_posts()) :
                        $testimonial_query->the_post();
                ?>
					<div class="item">
						<div class="testimony-wrap p-4 pb-5">
							<div class="user-img mb-5"
								style="background-image: url(<?php echo the_post_thumbnail_url()?>)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text text-center">
								<p class="mb-5 pl-4 line"><?php echo get_post_meta($post->ID, 'content', true)?></p>
								<p class="name"><?php the_title()?></p>
								<!-- <span class="position">Marketing Manager</span> -->
							</div>
						</div>
					</div>
					<?php
                        endwhile;
                    ?>
				</div>
			</div>
		</div>
	</div>
</section>