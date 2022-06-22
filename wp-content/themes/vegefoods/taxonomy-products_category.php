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
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc">$120.00</span><span
                                        class="price-sale">$80.00</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <!-- <a href="#"
        class="add-to-cart d-flex justify-content-center align-items-center text-center">
        <span><i class="ion-ios-menu"></i></span>
        </a>
        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
        <span><i class="ion-ios-cart"></i></span>
        </a> -->
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
            <!-- <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg"
    alt="Colorlib Template">
    <div class="overlay"></div>
    </a>
    <div class="text py-3 pb-4 px-3 text-center">
    <h3><a href="#">Strawberry</a></h3>
    <div class="d-flex">
    <div class="pricing">
    <p class="price"><span>$120.00</span></p>
    </div>
    </div>
    <div class="bottom-area d-flex px-3">
    <div class="m-auto d-flex">
    <a href="#"
    class="add-to-cart d-flex justify-content-center align-items-center text-center">
    <span><i class="ion-ios-menu"></i></span>
    </a>
    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
    <span><i class="ion-ios-cart"></i></span>
    </a>
    <a href="#" class="heart d-flex justify-content-center align-items-center ">
    <span><i class="ion-ios-heart"></i></span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.jpg"
    alt="Colorlib Template">
    <div class="overlay"></div>
    </a>
    <div class="text py-3 pb-4 px-3 text-center">
    <h3><a href="#">Green Beans</a></h3>
    <div class="d-flex">
    <div class="pricing">
    <p class="price"><span>$120.00</span></p>
    </div>
    </div>
    <div class="bottom-area d-flex px-3">
    <div class="m-auto d-flex">
    <a href="#"
    class="add-to-cart d-flex justify-content-center align-items-center text-center">
    <span><i class="ion-ios-menu"></i></span>
    </a>
    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
    <span><i class="ion-ios-cart"></i></span>
    </a>
    <a href="#" class="heart d-flex justify-content-center align-items-center ">
    <span><i class="ion-ios-heart"></i></span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.jpg"
    alt="Colorlib Template">
    <div class="overlay"></div>
    </a>
    <div class="text py-3 pb-4 px-3 text-center">
    <h3><a href="#">Purple Cabbage</a></h3>
    <div class="d-flex">
    <div class="pricing">
    <p class="price"><span>$120.00</span></p>
    </div>
    </div>
    <div class="bottom-area d-flex px-3">
    <div class="m-auto d-flex">
    <a href="#"
    class="add-to-cart d-flex justify-content-center align-items-center text-center">
    <span><i class="ion-ios-menu"></i></span>
    </a>
    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
    <span><i class="ion-ios-cart"></i></span>
    </a>
    <a href="#" class="heart d-flex justify-content-center align-items-center ">
    <span><i class="ion-ios-heart"></i></span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-5.jpg"
    alt="Colorlib Template">
    <span class="status">30%</span>
    <div class="overlay"></div>
    </a>
    <div class="text py-3 pb-4 px-3 text-center">
    <h3><a href="#">Tomatoe</a></h3>
    <div class="d-flex">
    <div class="pricing">
    <p class="price"><span class="mr-2 price-dc">$120.00</span><span
    class="price-sale">$80.00</span></p>
    </div>
    </div>
    <div class="bottom-area d-flex px-3">
    <div class="m-auto d-flex">
    <a href="#"
    class="add-to-cart d-flex justify-content-center align-items-center text-center">
    <span><i class="ion-ios-menu"></i></span>
    </a>
    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
    <span><i class="ion-ios-cart"></i></span>
    </a>
    <a href="#" class="heart d-flex justify-content-center align-items-center ">
    <span><i class="ion-ios-heart"></i></span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-6.jpg"
    alt="Colorlib Template">
    <div class="overlay"></div>
    </a>
    <div class="text py-3 pb-4 px-3 text-center">
    <h3><a href="#">Brocolli</a></h3>
    <div class="d-flex">
    <div class="pricing">
    <p class="price"><span>$120.00</span></p>
    </div>
    </div>
    <div class="bottom-area d-flex px-3">
    <div class="m-auto d-flex">
    <a href="#"
    class="add-to-cart d-flex justify-content-center align-items-center text-center">
    <span><i class="ion-ios-menu"></i></span>
    </a>
    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
    <span><i class="ion-ios-cart"></i></span>
    </a>
    <a href="#" class="heart d-flex justify-content-center align-items-center ">
    <span><i class="ion-ios-heart"></i></span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-7.jpg"
    alt="Colorlib Template">
    <div class="overlay"></div>
    </a>
    <div class="text py-3 pb-4 px-3 text-center">
    <h3><a href="#">Carrots</a></h3>
    <div class="d-flex">
    <div class="pricing">
    <p class="price"><span>$120.00</span></p>
    </div>
    </div>
    <div class="bottom-area d-flex px-3">
    <div class="m-auto d-flex">
    <a href="#"
    class="add-to-cart d-flex justify-content-center align-items-center text-center">
    <span><i class="ion-ios-menu"></i></span>
    </a>
    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
    <span><i class="ion-ios-cart"></i></span>
    </a>
    <a href="#" class="heart d-flex justify-content-center align-items-center ">
    <span><i class="ion-ios-heart"></i></span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-8.jpg"
    alt="Colorlib Template">
    <div class="overlay"></div>
    </a>
    <div class="text py-3 pb-4 px-3 text-center">
    <h3><a href="#">Fruit Juice</a></h3>
    <div class="d-flex">
    <div class="pricing">
    <p class="price"><span>$120.00</span></p>
    </div>
    </div>
    <div class="bottom-area d-flex px-3">
    <div class="m-auto d-flex">
    <a href="#"
    class="add-to-cart d-flex justify-content-center align-items-center text-center">
    <span><i class="ion-ios-menu"></i></span>
    </a>
    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
    <span><i class="ion-ios-cart"></i></span>
    </a>
    <a href="#" class="heart d-flex justify-content-center align-items-center ">
    <span><i class="ion-ios-heart"></i></span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-9.jpg"
    alt="Colorlib Template">
    <span class="status">30%</span>
    <div class="overlay"></div>
    </a>
    <div class="text py-3 pb-4 px-3 text-center">
    <h3><a href="#">Onion</a></h3>
    <div class="d-flex">
    <div class="pricing">
    <p class="price"><span class="mr-2 price-dc">$120.00</span><span
    class="price-sale">$80.00</span></p>
    </div>
    </div>
    <div class="bottom-area d-flex px-3">
    <div class="m-auto d-flex">
    <a href="#"
    class="add-to-cart d-flex justify-content-center align-items-center text-center">
    <span><i class="ion-ios-menu"></i></span>
    </a>
    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
    <span><i class="ion-ios-cart"></i></span>
    </a>
    <a href="#" class="heart d-flex justify-content-center align-items-center ">
    <span><i class="ion-ios-heart"></i></span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-10.jpg"
    alt="Colorlib Template">
    <div class="overlay"></div>
    </a>
    <div class="text py-3 pb-4 px-3 text-center">
    <h3><a href="#">Apple</a></h3>
    <div class="d-flex">
    <div class="pricing">
    <p class="price"><span>$120.00</span></p>
    </div>
    </div>
    <div class="bottom-area d-flex px-3">
    <div class="m-auto d-flex">
    <a href="#"
    class="add-to-cart d-flex justify-content-center align-items-center text-center">
    <span><i class="ion-ios-menu"></i></span>
    </a>
    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
    <span><i class="ion-ios-cart"></i></span>
    </a>
    <a href="#" class="heart d-flex justify-content-center align-items-center ">
    <span><i class="ion-ios-heart"></i></span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-11.jpg"
    alt="Colorlib Template">
    <div class="overlay"></div>
    </a>
    <div class="text py-3 pb-4 px-3 text-center">
    <h3><a href="#">Garlic</a></h3>
    <div class="d-flex">
    <div class="pricing">
    <p class="price"><span>$120.00</span></p>
    </div>
    </div>
    <div class="bottom-area d-flex px-3">
    <div class="m-auto d-flex">
    <a href="#"
    class="add-to-cart d-flex justify-content-center align-items-center text-center">
    <span><i class="ion-ios-menu"></i></span>
    </a>
    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
    <span><i class="ion-ios-cart"></i></span>
    </a>
    <a href="#" class="heart d-flex justify-content-center align-items-center ">
    <span><i class="ion-ios-heart"></i></span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-12.jpg"
    alt="Colorlib Template">
    <div class="overlay"></div>
    </a>
    <div class="text py-3 pb-4 px-3 text-center">
    <h3><a href="#">Chilli</a></h3>
    <div class="d-flex">
    <div class="pricing">
    <p class="price"><span>$120.00</span></p>
    </div>
    </div>
    <div class="bottom-area d-flex px-3">
    <div class="m-auto d-flex">
    <a href="#"
    class="add-to-cart d-flex justify-content-center align-items-center text-center">
    <span><i class="ion-ios-menu"></i></span>
    </a>
    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
    <span><i class="ion-ios-cart"></i></span>
    </a>
    <a href="#" class="heart d-flex justify-content-center align-items-center ">
    <span><i class="ion-ios-heart"></i></span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div> -->
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
    include_once 'footer.php';
    ?>