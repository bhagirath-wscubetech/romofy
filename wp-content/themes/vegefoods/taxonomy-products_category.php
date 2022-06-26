<?php
include_once 'header.php';
$catData = get_queried_object();
$catImgUrl = get_wp_term_image($catData->term_id);
$wpQuery = [
    'post_type' => 'product',
    'post_status' => 'publish',
    'tax_query' => [
        [
            'taxonomy' => 'products_category',
            'field' => 'term_id',
            'terms' => $catData->term_id
            ]
            ]
        ];
        $productData = new WP_Query($wpQuery);
        ?>

<!-- background-color:rgba(0,0,0,0.6);width:100%;height:100% -->
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo $catImgUrl?>')">
    <div class="slider-overlay">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2">
                            <a href="index.html">Home / </a>
                        </span>
                        <span><?php echo $catData->name?></span>
                    </p>
                    <h1 class="mb-0 bread"><?php echo $catData->name?></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <?php
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
</section>

<?php
        include_once 'footer.php';
        ?>