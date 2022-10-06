<?php get_header(); ?>

<div class="hero-slider">
  <!-- Slider Item -->

  <?php
  // Check rows exists.
  if (have_rows('hero_slider')) :

    // Loop through rows.
    while (have_rows('hero_slider')) : the_row();
  ?>
      <?php $image = get_sub_field('background_image'); ?>

      <div class="slider-item" style="background-image:url(<?php echo esc_url($image['url']) ?>)">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <!-- Slide Content Start -->
              <div class="content style text-center">
                <h2 class="text-white text-bold mb-2" data-animation-in="slideInLeft"><?php echo get_sub_field('title'); ?></h2>
                <p class="tag-text mb-4" data-animation-in="slideInRight"><?php echo get_sub_field('content'); ?></p>
                <?php $link = get_sub_field('button_link'); ?>
                <a href="<?php echo esc_url($link['url']); ?>" class="btn btn-main btn-white" data-animation-in="slideInLeft" data-duration-in="1.2"><?php echo get_sub_field('button_text'); ?></a>
              </div>
              <!-- Slide Content End -->
            </div>
          </div>
        </div>
      </div>
  <?php endwhile;
  endif; ?>
</div>
<!--====  End of Page Slider  ====-->

<section class="cta">
  <div class="container">
    <div class="cta-block row no-gutters">
      <div class="col-lg-4 col-md-6 emmergency item">
        <i class="fa fa-phone"></i>
        <?php if (have_rows('section_one')) : ?>
          <?php while (have_rows('section_one')) : the_row();  ?>
            <h2><?php echo get_sub_field('title'); ?></h2>
            <a href="tel:<?php echo get_sub_field('phone'); ?>"><?php echo get_sub_field('phone'); ?></a>
            <p><?php echo get_sub_field('content'); ?></p>
        <?php endwhile;
        endif; ?>
      </div>
      <div class="col-lg-4 col-md-6 top-doctor item">
        <i class="fa fa-stethoscope"></i>
        <?php if (have_rows('section_two')) : ?>
          <?php while (have_rows('section_two')) : the_row();  ?>
            <h2><?php echo get_sub_field('title'); ?></h2>
            <p><?php echo get_sub_field('content'); ?></p>
            <?php $link = get_sub_field('button_link') ?>
            <a href="<?php echo esc_url($link['url']); ?>" class="btn btn-main"><?php echo get_sub_field('button_text'); ?></a>
        <?php endwhile;
        endif; ?>
      </div>
      <div class="col-lg-4 col-md-12 working-time item">
        <i class="fa fa-hourglass-o"></i>
        <?php if (have_rows('section_three')) : ?>
          <?php while (have_rows('section_three')) : the_row();  ?>
            <h2>Working Hours</h2>
            <ul class="w-hours">
              <?php if (have_rows('day_time')) : ?>
                <?php while (have_rows('day_time')) : the_row();  ?>
                  <li><?php echo get_sub_field('day'); ?><span><?php echo get_sub_field('timing'); ?></span></li>
              <?php endwhile;
              endif; ?>
            </ul>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </div>
</section>


<!--about section-->
<section class="feature-section section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="image-content">
          <div class="section-title text-center">
            <?php if (have_rows('best_features')) : ?>
              <?php while (have_rows('best_features')) : the_row();  ?>
                <h3><?php echo get_sub_field('bold_title'); ?> <span><?php echo get_sub_field('normal_title'); ?></span></h3>
                <p class="mb-0"><?php echo get_sub_field('sub_content'); ?></p>

          </div>
          <div class="row">
            <?php if (have_rows('inner_content')) : ?>
              <?php while (have_rows('inner_content')) : the_row();  ?>
                <div class="col-sm-6">
                  <div class="item">
                    <div class="icon-box">
                      <figure>
                        <?php $img = get_sub_field('image'); ?>
                        <a href="services.html"><img loading="lazy" src="<?php echo esc_url($img['url']); ?>" alt="features image"></a>
                      </figure>
                    </div>
                    <h3 class="mb-2"><?php echo get_sub_field('heading'); ?></h3>
                    <p><?php echo get_sub_field('content'); ?></p>
                  </div>
                </div>
        <?php endwhile;
                endif;
              endwhile;
            endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End about section-->

<!--Start about us area-->
<section class="service-tab-section section">
  <div class="outer-box clearfix">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if (have_rows('tabs')) : ?>
            <!-- Nav tabs -->
            <div class="tabs mb-5">
              <ul class="nav nav-tabs justify-content-center" id="aboutTab" role="tablist">
                <?php $countActive = 0; ?>
                <?php while (have_rows('tabs')) : the_row();  ?>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link <?php echo ($countActive == 0) ? "active" : ""; ?>" id="<?php echo get_sub_field('main_text') ?>-tab" data-toggle="tab" href="#<?php echo get_sub_field('main_text') ?>" role="tab" aria-controls="<?php echo get_sub_field('main_text') ?>" aria-selected="true"><?php echo get_sub_field('main_text'); ?></a>
                    <?php $countActive = 1; ?>
                  </li>
                <?php endwhile; ?>

              </ul>
            </div>
            <!--Start single tab content-->
            <div class="tab-content" id="aboutTab">
              <?php $tabActive = 0; ?>
              <?php while (have_rows('tabs')) : the_row();  ?>
                <div class="service-box tab-pane fade <?php echo ($tabActive == 0) ? "show active" : ""; ?>" id="<?php echo get_sub_field('main_text') ?>">
                  <div class="row">
                    <div class="col-lg-6">
                      <img loading="lazy" class="img-fluid" src="<?php echo get_sub_field('image') ?>" alt="service-image">
                    </div>
                    <div class="col-lg-6">
                      <div class="contents">
                        <div class="section-title">
                          <h3><?php echo get_sub_field('title'); ?></h3>
                        </div>
                        <div class="text">
                          <p><?php echo get_sub_field('content'); ?></p>
                        </div>
                        <ul class="content-list">
                          <?php if (have_rows('icon_text')) : ?>
                            <?php while (have_rows('icon_text')) : the_row();  ?>
                              <li>
                                <i class="far fa-dot-circle"></i><?php echo get_sub_field('text'); ?>
                              </li>
                          <?php endwhile;
                          endif; ?>

                        </ul>
                        <a href="#" class="btn btn-style-one"><?php echo get_sub_field('button_text'); ?></a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php $tabActive = 1 ?>
            <?php endwhile;
            endif; ?>

            <!--End single tab content-->
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End about us area-->

<!--Service Section-->
<section class="service-section bg-gray section">
  <div class="container">
    <?php if (have_rows('provided_services')) : ?>
      <?php while (have_rows('provided_services')) : the_row();  ?>
        <div class="section-title text-center">
          <h3><?php echo get_sub_field('bold_title'); ?> <span><?php echo get_sub_field('normal_title'); ?></span></h3>
          <p><?php echo get_sub_field('content'); ?></p>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="items-container">
              <?php if (have_rows('carousel')) : ?>
                <?php while (have_rows('carousel')) : the_row();  ?>
                  <div class="item">
                    <div class="inner-box">
                      <div class="img_holder">
                        <?php $img = get_sub_field('image');  ?>
                        <a href="service.html">
                          <img loading="lazy" src="<?php echo esc_url($img['url']); ?>" alt="images" class="img-fluid">
                        </a>
                      </div>
                      <div class="image-content text-center">
                        <span><?php echo get_sub_field('text'); ?></span>
                        <a href="service.html">
                          <h6><?php echo get_sub_field('title'); ?></h6>
                        </a>
                        <p><?php echo get_sub_field('content'); ?></p>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
    <?php endwhile;
    endif; ?>
  </div>
</section>
<!--End Service Section-->

<!--team section-->
<section class="team-section section">
  <?php if (have_rows('our_expert_doctors')) : ?>
    <?php while (have_rows('our_expert_doctors')) : the_row();  ?>
      <div class="container">
        <div class="section-title text-center">
          <h3><?php echo get_sub_field('bold_title'); ?> <span><?php echo get_sub_field('normal_title'); ?></span></h3>
          <p class="mb-0"><?php echo get_sub_field('content'); ?></p>
        </div>
        <div class="row justify-content-center">
          <?php if (have_rows('details')) : ?>
            <?php while (have_rows('details')) : the_row();  ?>
              <div class="col-lg-4 col-md-6">
                <div class="team-member">
                  <?php $img = get_sub_field('image');  ?>
                  <img loading="lazy" src="<?php echo esc_url($img['url']); ?>" alt="doctor" class="img-fluid">
                  <div class="contents text-center">
                    <h4><?php echo get_sub_field('title'); ?></h4>
                    <p><?php echo get_sub_field('content'); ?></p>
                    <?php $link = get_sub_field('button_link') ?>
                    <a href="<?php echo esc_url($link['url']); ?>" class="btn btn-main"><?php echo get_sub_field('button_text'); ?></a>
                  </div>
                </div>
              </div>
          <?php endwhile;
          endif; ?>
        </div>
      </div>
  <?php endwhile;
  endif; ?>
</section>
<!--End team section-->

<!--testimonial-section-->
<section class="testimonial-section" style="background: url(<?php echo get_field('testimonial_background'); ?>);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php if (have_rows('what_our_patients_says')) : ?>
          <?php while (have_rows('what_our_patients_says')) : the_row();  ?>
            <div class="section-title text-center">
              <h3><?php echo get_sub_field('bold_title'); ?> <span><?php echo get_sub_field('normal_title'); ?></span>
              </h3>
            </div>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="testimonial-carousel">
          <!--Slide Item-->
          <?php if (have_rows('testimonial')) : ?>
            <?php while (have_rows('testimonial')) : the_row();  ?>
              <div class="slide-item">
                <div class="inner-box text-center">
                  <div class="image-box">
                    <?php $img = get_sub_field('image');  ?>
                    <figure>
                      <img loading="lazy" src="<?php echo esc_url($img['url']); ?>" alt="">
                    </figure>
                  </div>
                  <h6><?php echo get_sub_field('title'); ?></h6>
                  <p class="mb-0"><?php echo get_sub_field('content'); ?></p>
                </div>
              </div>
          <?php endwhile;
          endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End testimonial-section-->

<!-- Contact Section -->
<section class="appoinment-section section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="accordion-section">
          <div class="section-title">
            <h3><?php the_field('faq_title'); ?></h3>
          </div>
          <div class="accordion-holder">
            <div class="accordion" id="accordionGroup" role="tablist" aria-multiselectable="true">
              <?php if (have_rows('faq')) : ?>
                <?php $accordianShow = 0; ?>
                <?php while (have_rows('faq')) : the_row();  ?>
                  <?php
                  if ($accordianShow == 0) :
                    $show = "show";
                    $hide = "";
                    $aria = "true";
                  else :
                    $show = "";
                    $hide = "collapsed";
                    $aria = "false";
                  endif;
                  ?>
                  <div class="card">
                    <div class="card-header" role="tab" id="heading-<?php echo get_row_index(); ?>">
                      <h4 class="card-title">
                        <a class="<?php echo $hide ?>" role="button" data-toggle="collapse" href="#collapse-<?php echo get_row_index(); ?>" aria-expanded="<?php echo $aria ?>" aria-controls="collapse-<?php echo get_row_index(); ?>">
                          <?php echo get_sub_field('title'); ?>
                        </a>
                      </h4>
                    </div>
                    <div id="collapse-<?php echo get_row_index(); ?>" class="collapse <?php echo $show ?>" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionGroup">

                      <div class="card-body">
                        <?php echo get_sub_field('content'); ?>
                      </div>
                    </div>
                  </div>
                  <?php $accordianShow++; ?>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="contact-area pl-0 pl-lg-5">
          <div class="section-title">
            <?php if (have_rows('request_appointment')) : ?>
              <?php while (have_rows('request_appointment')) : the_row();  ?>
                <h3><?php echo get_sub_field('bold_title'); ?>
                  <span><?php echo get_sub_field('normal_title'); ?></span>
                </h3>
            <?php endwhile;
            endif; ?>
          </div>
          <form name="contact_form" class="default-form contact-form" action="!#" method="post">
            <?php echo do_shortcode('[contact-form-7 id="311" title="Footer Form"]'); ?>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- End Contact Section -->

<?php get_footer(); ?>