<?php get_header(); ?>

<div class="container-fluid">
    <div class="container py-5">
        <div class="row">
            <?php if (have_posts()) :
                while (have_posts()) :
                    the_post(); ?>
                    <div class="col">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_content(); ?>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>