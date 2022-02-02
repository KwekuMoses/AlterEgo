<div class="search-meta flex absolute">
    <!-- link to search page  -->
    <a class="db mr2" href="<?php echo site_url('/search/'); ?>">
        <img src="<?php echo get_template_directory_uri() . '/images/icon-search.svg'; ?>" class="db" alt="">

    </a>
    <!-- link to cart page -->
    <a href="<?php echo cart_url(); ?>" class="db">
        <img src="<?php echo get_template_directory_uri() . '/images/icon-cart.svg'; ?>" class="db" alt="">
    </a>
</div>