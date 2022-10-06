<?php get_header(); ?>


<div class="container my-5">
    <div class="row">
        <div class="<?php if (is_active_sidebar('blog_sidebar')) : ?>col-md-10<?php else : ?>col-md-12<?php endif; ?> ">
            <div class="row">
                <?php

                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        get_template_part("template-parts/content", "posts");
                    endwhile;
                else :
                    echo "<h3 class='alert alert-denger'>Post Not Found</h3>";
                endif; ?>
            </div>
        </div>

        <?php if (is_active_sidebar('blog_sidebar')) : ?>
            <div class="col-md-2">

                <?php get_sidebar(); ?>  

            </div>
        <?php endif; ?>

    </div>
</div>


<?php get_footer(); ?>