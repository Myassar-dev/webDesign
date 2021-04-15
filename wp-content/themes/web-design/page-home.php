<?php
/**
* Template Name: Home
*
*/
get_header();
?>

<section id="home">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-5 col-lg-6 order-md-2">

        <!-- Image -->
        <img src="<?php bloginfo('template_directory') ?>/img/header.png" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 " >

      </div>
      <div class="col-12 col-md-7 col-lg-6 order-md-1" >

        <!-- Heading -->
        <h1 class="display-3 text-center text-md-left">
          Provide You best Best Ui Service
        </h1>

        <!-- Text -->
        <p class="lead text-center text-md-left f-w-6 mb-6 mb-lg-8">
          Mobile App Design and Development Studio. You can hire us
        </p>

        <!-- Buttons -->
        <div class="text-center text-md-left">
          <a href="overview.html" class="btn btn-primary btn-hedar shadow lift mr-1">
            <img src="<?php bloginfo('template_directory') ?>/img/waving-hand.png" alt=""> Wave Me
          </a>

        </div>

      </div>
    </div>
  </div>
</section>


<section class="pt-10 pt-md-12 m-t-15" id="services">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">

          <!-- Heading -->
          <h5>OUR SERVICES</h5>
          <h2>
            We Provide Best Quality Service
          </h2>

          <!-- Text -->
          <p class="font-size-lg text-muted mb-7 mb-md-9">
          Our commitment to quality ensures that your applications get the best UI design possible. UI/UX design is more than just pixels and animations, but the entire application experience.
          </p>

        </div>
      </div>

      <div class="row mt-5">
        <?php

          $args = array(
              'post_type' => 'wpll_service',
              'posts_per_page' => 8,
              'orderby' => 'post_id',
              'order' => 'ASC',
          );

          $services = new WP_Query( $args );
          // echo "<pre>";
          // var_dump($services);die();
          while ( $services->have_posts() ) : $services->the_post();

          ?>
        <!-- start card -->
        <div class="col-12 col-md-6 col-lg-4 card-parent ">
          <div class="card <?php the_field('service-color'); ?>" style="width: 18rem;">
            <div class="card-body">
              <?php web_design_post_thumbnail(); ?>
              <h5 class="card-title"><?= the_title() ?></h5>
               <?php the_content() ?>
              <a href="#" class="btn btn-primary btn-white">Read More</a>
            </div>
          </div>
        </div>
        <!-- end card -->
        <?php
           endwhile;

           wp_reset_postdata();
          ?>

      </div>

    </div> <!-- / .container -->
  </section>

<section id="customer-review">
<div class="container">
  <div class="row justify-content-center pt-5  ">
    <div class="col-12 col-md-10 col-lg-8 text-center pt-5 ">

      <!-- Heading -->
       <h2 class="white-text">
        What they say about us!
      </h2>

      <!-- Text -->
      <p class="font-size-lg text-muted mb-7 mb-md-9 gray-text ">
        Customer Review Sites for Collecting Business & Product Reviews
      </p>

    </div>

    <div id="testimonial_095" class="carousel slide testimonial_095_indicators testimonial_095_control_button thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
      <!-- Header of Slider -->
      <div class="testimonial_095_header">
       </div> <!-- /Header of Slider -->
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#testimonial_095" data-slide-to="0" class="active"></li>
          <li data-target="#testimonial_095" data-slide-to="1"></li>
          <li data-target="#testimonial_095" data-slide-to="2"></li>
      </ol> <!-- Wrapper For Slides -->
      <div class="carousel-inner" role="listbox">
          <!-- Slide -->
          <div class="carousel-item active">
              <!-- Text Layer -->
              <div class="testimonial_095_slide">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="185.174" height="182.921" viewBox="0 0 185.174 182.921">
                  <defs>
                    <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 200 133">
                      <image width="200" height="133" xlink:href="<?php bloginfo('template_directory') ?>/img/portrait.jpg"/>
                    </pattern>
                  </defs>
                  <path id="gettyimages-507480872-612x612" d="M29.276-33.341c14.8-12.11,33.216-14.932,52.445,21.913s48.642,96.645,57.8,115.309-2.845,38.51-24.878,37.534S43.973,133.546,4.09,125.371s-54.943-13.446-42.259-50.2S14.474-21.231,29.276-33.341Z" transform="translate(42.554 41.472)" fill="url(#pattern)"/>
                  <span class="rate">9.8</span>
                </svg>

                <!-- <img src="assets/img/portrait.jpg" alt=""> -->



                  <p>Loved the design specially the color combination. Look forward to work more in future.</p>
                  <h5 class="name">Cris Angela</h5>
                  <span>Head Of CsWeb</span>
              </div> <!-- /Text Layer -->
          </div> <!-- /item -->
          <!-- End -->

      </div> <!-- End of Wrapper For Slides -->
      <!-- Left Control -->
       <a class="carousel-control-prev" href="#testimonial_095" data-slide="prev"> <span class="fa fa-chevron-left"></span> </a>
       <!-- Right Control -->
       <a class="carousel-control-next" href="#testimonial_095" data-slide="next"> <span class="fa fa-chevron-right"></span> </a>

  </div> <!-- End Paradise Slider -->
  </div>
</div>
</section>

<?php

get_footer();

?>
