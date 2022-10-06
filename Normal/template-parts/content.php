<div class="col-sm-12">
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
    <p><?php echo get_the_content(); ?></p>
</div>
<p style="text-align:center;"><?php echo previous_post_link('%link','Previous Post');?> | <?php next_post_link('%link','Next Post');  ?></p>