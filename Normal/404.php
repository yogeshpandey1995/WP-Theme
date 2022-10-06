<?php get_header(); ?>


<div class="page-wrap d-flex flex-row align-items-center py-5" style="background-color: #e1fdff; ">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead alert alert-info"><b>THE PAGE YOU REQUESTED COULD NOT FOUND</b></div>
                <a href="<?php echo home_url('/'); ?>" class="btn btn-info btn-lg">Back to Home</a>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>