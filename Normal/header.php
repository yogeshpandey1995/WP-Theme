<!DOCTYPE html>
<html lang="eng">

<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <!-- <title><?php echo get_bloginfo('name') ?> | <?php echo get_bloginfo('description') ?></title> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="">
  <meta name="generator" content="">

  <!-- Stylesheets -->
  <link href="<?php echo get_bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="icon" href="<?php echo get_bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon">

  <?php wp_head() ?>

</head>


<body>
  <div class="page-wrapper">

    <!-- <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="top-left text-center text-md-left">
              <h6><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_field('location'); ?></h6>
            </div>
          </div>
          <div class="col-md-6">
            <div class="top-right text-center text-md-right">
              <?php if (have_rows('social_media')) : ?>
                <?php while (have_rows('social_media')) : the_row();  ?>
                  <ul class="social-links">
                    <?php $link = get_field('social_media'); ?>
                    <?php if ($link['facebook']) : ?>
                      <li>
                        <?php $social_link = get_sub_field('facebook') ?>
                        <a href="<?php echo esc_url($social_link['url']); ?>" aria-label="facebook">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                    <?php endif; ?>
                    <?php if ($link['twitter']) : ?>
                      <li>
                        <?php $social_link = get_sub_field('twitter') ?>
                        <a href="<?php echo esc_url($social_link['url']); ?>" aria-label="twitter">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                    <?php endif; ?>
                    <?php if ($link['google_plus']) : ?>
                      <li>
                        <?php $social_link = get_sub_field('google_plus') ?>
                        <a href="<?php echo esc_url($social_link['url']); ?>" aria-label="google-plus">
                          <i class="fab fa-google-plus-g"></i>
                        </a>
                      </li>
                    <?php endif; ?>
                    <?php if ($link['instagram']) : ?>
                      <li>
                        <?php $social_link = get_sub_field('instagram') ?>
                        <a href="<?php echo esc_url($social_link['url']); ?>" aria-label="instagram">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    <?php endif; ?>
                    <?php if ($link['youtube']) : ?>
                      <li>
                        <?php $social_link = get_sub_field('youtube') ?>
                        <a href="<?php echo esc_url($social_link['url']); ?>" aria-label="youtube">
                          <i class="fab fa-youtube"></i>
                        </a>
                      </li>
                    <?php endif; ?>
                  </ul>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class='header-uper'>
      <div class='container'>
        <div class='row align-items-center'>
          <div class='col-xl-4 col-lg-3'>

            <?php
            $default_logo = get_bloginfo('template_url') . '/images/logo.png';
            $custom_logo_id = get_theme_mod('custom_logo');
            $image = wp_get_attachment_image_src($custom_logo_id, 'full');
            if (has_custom_logo()) {
              $default_logo = esc_url($image[0]);
            }
            ?>

            <div class='logo'>
              <a href='<?php site_url(); ?>'>
                <img loading='lazy' class='img-fluid' src='<?php echo $default_logo ?>' alt='logo'>
              </a>
            </div>
          </div>
          <div class='col-xl-8 col-lg-9'>
            <div class='right-side'>
              <?php if (have_rows('email_and_call_now')) : ?>
                <?php while (have_rows('email_and_call_now')) : the_row();  ?>
                  <ul class='contact-info pl-0 mb-4 mb-md-0'>
                    <li class='item text-left'>
                      <div class='icon-box'>
                        <i class='far fa-envelope'></i>
                      </div>
                      <strong><?php echo get_sub_field('email_title'); ?></strong>
                      <br>
                      <a href='mailto:<?php echo get_sub_field('email_url'); ?>'>
                        <span><?php echo get_sub_field('email_url'); ?></span>
                      </a>
                    </li>
                    <li class='item text-left'>
                      <div class='icon-box'>
                        <i class='fas fa-phone'></i>
                      </div>
                      <strong><?php echo get_sub_field('call_now_title'); ?></strong>
                      <br>
                      <a href='tel:<?php echo get_sub_field('call_now_url'); ?>'>
                        <span><?php echo get_sub_field('call_now_url'); ?></span>
                      </a>
                    </li>
                  </ul>
              <?php endwhile;
              endif; ?>
              <?php $appointment = get_field('appointment_button'); ?>
              <div class='link-btn text-center text-lg-right'>
                <a href='<?php echo esc_url($appointment['appointment_link']['url']); ?>' class='btn-style-one'>
                  <?php echo  $appointment['appointment_text']; ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->


    <!--header top-->

    <?php
    // the query
    $args = array(
      'post_type' => 'top-header'
    );
    $the_query = new WP_Query($args); ?>

    <?php if ($the_query->have_posts()) : ?>

      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <?php include 'hedeartop/top-header.php'; ?>

      <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>

    <?php endif; ?>


    <!--header top-->

    <!--Main Header-->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarLinks">
          <!-- <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item @@service">
              <a class="nav-link" href="service.html">Service</a>
            </li>
            <li class="nav-item @@gallery">
              <a class="nav-link" href="gallery.html">Gallery</a>
            </li>
            <li class="nav-item @@team">
              <a class="nav-link" href="team.html">Team</a>
            </li>
            <li class="nav-item @@appointment">
              <a class="nav-link" href="appointment.html">Appointment</a>
            </li>
            <li class="nav-item dropdown @@blogs">
              <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blogs</a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item @@blog" href="blog.html">Blog</a></li>
                <li><a class="dropdown-item @@blogDetails" href="blog-details.html">Blog Details</a></li>
                <li class="dropdown dropdown-submenu dropright">
                  <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                    <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul> -->
          <!--/* <?php
                  wp_nav_menu(
                    array(
                      'theme_location' => 'primary_menu',
                      'menu_class' => 'navbar-nav',
                      'menu_id' => 'navbar-nav_id',
                      'container' => 'div',
                      'container_class' => 'main-nav',
                      'depth' => 3,
                      //'items_wrap' => '<ul class="navbar-nav"><li class="nav-liclass"><a class="nav_aclass">%3$s</a></li></ul>',
                    )
                  )
                  ?>*/ -->
          <?php
          $location_details = get_nav_menu_locations();
          $menu_id = $location_details['primary_menu'];

          $menu_item = wp_get_nav_menu_items($menu_id);
          ?>
          <ul class="navbar-nav">
            <?php
            foreach ($menu_item as $value) :
            ?>
              <li class="nav-item"><a href="<?php echo $value->url; ?>" class="nav-link"><?php echo $value->title; ?></a></li>
            <?php
            endforeach;
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <!--End Main Header -->