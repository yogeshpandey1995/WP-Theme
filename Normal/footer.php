<!--footer-main-->
<footer class="footer-main">
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-between">
                <!-- <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="about-widget">
                        <div class="footer-logo">
                            <figure>
                                <a href="index.html">
                                    <img loading="lazy" class="img-fluid" src="<?php echo get_bloginfo('template_url'); ?>/images/logo-2.png" alt="medic">
                                </a>
                            </figure>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus?</p>
                        <ul class="location-link">
                            <li class="item">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Modamba, NY 80021, United States</p>
                            </li>
                            <li class="item">
                                <i class="far fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:support@medic.com">
                                    <p>support@medic.com</p>
                                </a>
                            </li>
                            <li class="item">
                                <i class="fas fa-phone" aria-hidden="true"></i>
                                <p>(88017) +123 4567</p>
                            </li>
                        </ul>
                        <ul class="list-inline social-icons">
                            <li class="list-inline-item"><a href="https://facebook.com/themefisher" aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/themefisher" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://instagram.com/themefisher" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://github.com/themefisher" aria-label="github"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="footer-logo">
                        <figure>
                            <a href="index.html">
                                <img loading="lazy" class="img-fluid" src="<?php echo get_option('footer_logo') ?>" alt="">
                            </a>
                        </figure>
                    </div>
                    <?php if (is_active_sidebar('footer-1')) : ?>
                        <div class="about-widget">
                            <?php dynamic_sidebar('footer-1') ?>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- <div class="col-lg-3 col-md-5 mb-3 mb-md-0">
                    <h2>Services</h2>
                    <ul class="menu-link">
                        <li>
                            <a href="service.html">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Orthopadic Liabilities</a>
                        </li>
                        <li>
                            <a href="service.html">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Dental Clinic</a>
                        </li>
                        <li>
                            <a href="service.html">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Dormamu Clinic</a>
                        </li>
                        <li>
                            <a href="service.html">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Psycological Clinic</a>
                        </li>
                        <li>
                            <a href="service.html">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Gynaecological Clinic</a>
                        </li>
                    </ul>
                </div> -->
                <div class="col-lg-3 col-md-5 mb-3 mb-md-0">
                    <?php
                    if (is_active_sidebar('footer-2')) :
                        dynamic_sidebar('footer-2');
                    else :
                    ?>
                        <h2>Links</h2>
                        <?php
                        $location_details = get_nav_menu_locations();
                        $menu_id = $location_details['footer_menu'];

                        $menu_item = wp_get_nav_menu_items($menu_id);                                   // Footer Menu 
                        ?>
                        <ul class="menu-link">
                            <?php
                            foreach ($menu_item as $value) :
                            ?>
                                <li>
                                    <a href="<?php echo $value->url; ?>">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $value->title; ?>
                                    </a>
                                </li>
                            <?php
                            endforeach;
                            ?>
                        </ul>

                    <?php endif; ?>
                </div>
                <!-- <div class="col-lg-4 col-md-7">
                    <div class="social-links">
                        <h2>Recent Posts</h2>
                        <ul>
                            <li class="item">
                                <div class="media">
                                    <div class="media-left mr-3">
                                        <a href="blog-details.html">
                                            <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/images/blog/post-thumb-small.jpg" alt="post-thumb">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h5><a href="blog-details.html">A lesson adip isicing</a></h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="media">
                                    <div class="media-left mr-3">
                                        <a href="blog-details.html">
                                            <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/images/blog/post-thumb-small.jpg" alt="post-thumb">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h5><a href="blog-details.html">How to make an event</a></h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-7">
                    <?php if (is_active_sidebar('footer-3')) : ?>
                        <div class="social-links">
                            <?php dynamic_sidebar('footer-3') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container clearfix">
            <div class="copyright-text">
                <p>&copy; <?php echo get_option("custom_copyright_setting"); ?>
                    <a href="<?php echo get_option("custom_copyright_link_setting"); ?>">
                        <?php echo get_option("custom_copyright_link_text_setting"); ?>
                    </a>
                </p>
            </div>
            <!-- <ul class="footer-bottom-link">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul> -->
            <?php
            $location_details = get_nav_menu_locations();
            $menu_id = $location_details['footer_bottom_menu'];

            $menu_item = wp_get_nav_menu_items($menu_id);
            ?>
            <ul class="footer-bottom-link">
                <?php
                foreach ($menu_item as $value) :
                ?>
                    <li>
                        <a href="<?php echo $value->url; ?>"><?php echo $value->title; ?></a>
                    </li>
                <?php
                endforeach;
                ?>
            </ul>
        </div>
    </div>
</footer>
<!--End footer-main-->

<!-- scroll-to-top -->
<div id="back-to-top" class="back-to-top">
    <i class="fa fa-angle-up"></i>
</div>

</div>

<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
    <span class="icon fa fa-angle-up"></span>
</div>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>

<?php wp_footer() ?>
</body>

</html>