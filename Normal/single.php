<?php get_header(); ?>

<div class="container my-5">
    <div class="row">
        <?php
        // $custom_post = new WP_Query(array('post_type' => 'our_projects', 'post_status' => 'publish', 'posts_per_page' => 1, 'orderby' => 'title', 'order' => 'ASC',));
        // print_r($custom_post);
        // if (have_posts()) :
        while (have_posts()) :
            the_post();

            get_template_part("template-parts/content", get_post_format());

        endwhile;
        //  endif; 
        ?>
    </div>
</div>

<?php get_footer(); ?>