<!-- here we apply a width of 50% when the screen is between 30em and 60em -->
<div class="site-branding w-50-m">

    <?php get_template_part('template-parts/header-search')?>


    <!-- get_category_image function will find the current category, and if it doesnt it will return the homepage image -->
    <img src="<?php get_category_image('home'); ?>" class="db featured-image">
</div><!-- .site-branding -->