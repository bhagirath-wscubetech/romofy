<?php
  // Template Name: Contact Us
	get_header();
  $addressData = get_other_address();
?>

<div class="hero-wrap hero-bread"
  style="background-image: url('<?php echo get_template_directory_uri()?>/images/bg_1.jpg');">
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

<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="w-100"></div>
      <div class="col-md-4 d-flex">
        <div class="info bg-white p-4">
          <p>
            <span class="icon icon-map-marker"></span>
            <span>Address:</span>
            <br />
            <?php echo do_shortcode(' [contact type="address"]')?>
          </p>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="info bg-white p-4">
          <p>
            <span class="icon icon-phone"></span>
            <span>Phone:</span>
            <br />
            <a href="tel:<?php echo do_shortcode(' [contact type="mobileno"]')?>">
              <?php echo do_shortcode(' [contact type="mobileno"]')?></a>
            ,
            <a href="tel:<?php echo do_shortcode(' [contact type="mobileno2"]')?>">
              <?php echo do_shortcode(' [contact type="mobileno2"]')?></a>
            <!-- do_shortcode(' [contact type="mobileno2"]') -->
          </p>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="info bg-white p-4">
          <p>
            <span class="icon icon-envelope"></span>
            <span>Email:</span>
            <br />
            <a
              ref="mailto:<?php echo do_shortcode(' [contact type="email"]')?>"><?php echo do_shortcode(' [contact type="email"]')?></a>
          </p>
        </div>
      </div>
      <!-- <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Website</span> <a href="#">yoursite.com</a></p>
        </div>
      </div> -->
    </div>
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="#" class="bg-white p-5 contact-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>

      </div>

      <div class="col-md-6 d-flex">
        <iframe src="<?php echo do_shortcode(' [contact type="usermap"]')?>" width="600" height="450" style="border:0;"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- <div id="map" class="bg-white"></div> -->
      </div>
    </div>
  </div>
</section>
<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row">
      <div class="w-100">
        <h3 class="text-center">Our Other Office Addresses</h3>
      </div>
    </div>
    <?php
    while ( $addressData->have_posts() ) : 
      $addressData->the_post();      
    ?>
    <div class="row mt-3 d-flex contact-info">
      <div class="col-12">
        <h6><?php the_title()?> </h6>
      </div>
      <div class="col-md-4 d-flex">
        <div class="info bg-white p-4">
          <p>
            <b>
              <span class="icon icon-map-marker"></span>
              Address:
            </b>
            <br />
            <?php echo get_field( "complete_address",$addressData->post->ID);?>
          </p>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="info bg-white p-4">
          <p>
            <b>
              <span class="icon icon-phone"></span>
              Phone:
            </b>
            <br/>
            <a href="tel:<?php echo get_field( "primary_contact",$addressData->post->ID);?>">
              <?php echo get_field( "primary_contact",$addressData->post->ID);?>
            </a>
            ,
            <a href="tel:<?php echo get_field( "secondary_contact",$addressData->post->ID);?>">
              <?php echo get_field( "secondary_contact",$addressData->post->ID);?>
            </a>

            <!-- do_shortcode(' [contact type="mobileno2"]') -->
          </p>
        </div>
      </div>
      <div class="col-md-4 d-flex">
        <div class="info bg-white p-4">
          <p>
            <b>
              <span class="icon icon-envelope"></span>
              <span>Email:</span>
            </b>
            <br />
            <a href="tel:<?php echo get_field( "email",$addressData->post->ID);?>">
              <?php echo get_field( "email",$addressData->post->ID);?>
            </a>
          </p>
        </div>
      </div>
    </div>
    <?php
      endwhile;
    ?>
  </div>
</section>

<?php
  		get_footer();
?>