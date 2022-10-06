<?php get_header(); ?>

<div class="container my-5">
    <div class="row">
        <?php
        $custom_post = new WP_Query(array('post_type' => 'our_projects', 'post_status' => 'publish', 'posts_per_page' => 9, 'orderby' => 'title', 'order' => 'ASC',));
        if ($custom_post->have_posts()) :
            while ($custom_post->have_posts()) :
                // print_r($custom_post);
                $custom_post->the_post();
        ?>
                <div class="col-md-4">
                    <?php
                    if (has_post_thumbnail()) :
                        the_post_thumbnail();
                    else :
                    ?>
                        <img src="<?php echo get_template_directory_uri() . '/images/no-image.jpg' ?>" class="img-fluid">
                    <?php endif; ?>
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <?php the_date('F, Y'); ?> | <?php the_category(','); ?></p>
                    <p><?php echo wp_trim_words(get_the_content(), 25, ' ...'); ?></p>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-sm-12">
            <?php if (is_active_sidebar('footer-4')) : ?>
                <div class="widget-area">
                    <?php dynamic_sidebar('footer-4') ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>