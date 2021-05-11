<?php
function acfinputmask()
{
    wp_enqueue_script('acfinputmask', 'https://dominio.com/js/acfinputmask.js', array(), false, true);
}
add_action('admin_enqueue_scripts', 'acfinputmask');
