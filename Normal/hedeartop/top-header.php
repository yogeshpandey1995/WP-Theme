<div class="header-top">
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
          <?php if (get_field('appointment_button')) : ?>
            <?php $appointment = get_field('appointment_button'); ?>
            <?php if ($appointment['appointment_text']) : ?>
              <div class='link-btn text-center text-lg-right'>
                <a href='<?php echo esc_url($appointment['appointment_link']); ?>' class='btn-style-one'>
                  <?php echo  $appointment['appointment_text']; ?>
                </a>
              </div>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>