<div class="col-sm-4">
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
    <p>By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time('M, Y'); ?> | <?php the_category(','); ?></p>
    <p><?php echo wp_trim_words(get_the_content(), 25, ' ...'); ?></p>
</div>