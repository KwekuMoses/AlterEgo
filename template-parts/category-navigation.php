<!-- Push the items to the end vertically using flexbox and convert them into columns -->
<nav id="site-navigation" class="main-navigation flex-l  flex-column justify-between relative pa3 ma4-l relative">

    <a href="<?php echo get_site_url(); ?>" class="db mb3 logo w4 w-auto-ns">
        <img src="<?php echo get_template_directory_uri() . '/images/alter-ego-logo.svg'; ?>" class="db">
    </a>
    <?php
wp_nav_menu(
array(
    'theme_location' => 'menu-1',
    'menu_id'        => 'primary-menu',
    'menu_class'	=> 'main-menu ma0 pa0 list'
)
);
?>
</nav><!-- #site-navigation -->