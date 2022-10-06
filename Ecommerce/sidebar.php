<?php if (is_shop()) : ?>
    <div class="widget-area">
        <?php dynamic_sidebar('product_sidebar'); ?>
    </div>
<?php else : ?>
    <div class="widget-area">
        <?php dynamic_sidebar('blog_sidebar'); ?>
    </div>
<?php endif; ?>