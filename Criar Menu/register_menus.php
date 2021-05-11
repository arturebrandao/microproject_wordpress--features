<?php
// habilitando menus
add_theme_support('menus');

// criando menus
function register_menus()
{
    register_nav_menus(
        array(
            'menu-principal' => __('Menu Principal')
        )
    );
}
add_action('init', 'register_menus');
