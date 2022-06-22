<?php
// Template Name: Awards
get_header();
$args = array(
    'post_type' => 'award',
    // Several more arguments could go here. Last one without a comma.
);

// Query the posts:
$obituary_query = new WP_Query($args);

// // Loop through the obituaries:
// while ($obituary_query->have_posts()) : $obituary_query->the_post();
//     // Echo some markup
//     echo '<p>';
//     // As with regular posts, you can use all normal display functions, such as
//     the_title();
//     // Within the loop, you can access custom fields like so:
//     echo get_post_meta($post->ID, 'birth_date', true); 
//     // Or like so:
//     $birth_date = get_post_custom_values('birth_date');
//     echo $birth_date[0];
//     echo '</p>'; // Markup closing tags.
// endwhile;

// // Reset Post Data
// wp_reset_postdata();

?>



<div class="hero-wrap hero-bread" style="background-image: url('<?php echo the_post_thumbnail_url()?>');">
    <div class="slider-overlay">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="<?php echo get_site_url()?>">Home /</a>
                        </span>
                        <span><?php the_title()?></span>
                    </p>
                    <h1 class="mb-0 bread"><?php the_title()?></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <!-- <div class="row justify-content-center">
			<div class="col-md-10 mb-5 text-center">
				<ul class="product-category">
					<li><a href="#" class="active">All</a></li>
					<li><a href="#">Vegetables</a></li>
					<li><a href="#">Fruits</a></li>
					<li><a href="#">Juice</a></li>
					<li><a href="#">Dried</a></li>
				</ul>
			</div>
		</div> -->
        <div class="row">
            <?php
                 while ($obituary_query->have_posts()) :
                    $obituary_query->the_post();
            ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url();?>"
                            width="100%" style="height:300px !important" alt="<?php the_title(); ?>">
                        <!-- <span class="status">30%</span> -->
                        <div class=have_posts"overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3> <b> <a href="#"><?php the_title(); ?></a> </b> </h3>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
            ?>
        </div>
        <!-- <div class="row mt-5">
			<div class="col text-center">
				<div class="block-27">
					<ul>
						<li><a href="#">&lt;</a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&gt;</a></li>
					</ul>
				</div>
			</div>
		</div> -->
    </div>
</section>

<?php
	include "testimonials-section.php";
?>

<?php
    // include_once 'footer.php';
    get_footer();
?>