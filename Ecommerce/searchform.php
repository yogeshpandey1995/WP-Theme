<form action="<?php echo home_url('/'); ?>" method="get">
    <div class="input-group">
        <input type="text" value="<?php the_search_query(); ?>" class="form-control" placeholder="Search Post..." name="s" required />
        <button id="search-button" type="submit" class="btn btn-dark btn-md" style="border-radius:0 5px 5px 0">
            Search
        </button>
        <input type="hidden" name="post_type" value="post" />
    </div>
</form>