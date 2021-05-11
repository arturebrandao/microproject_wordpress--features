<?php
function get_last_update()
{

    $lastupdate = array();
    $args = array(
        'post_type' => get_list_post_types(),
        'post_status' => 'publish',
        'orderby' => 'modified',
        'order' => 'DESC',
        'posts_per_page' => 1
    );

    $loop = new WP_Query($args);
    if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post();
            $lastupdate['id'] = get_the_ID();
            $lastupdate['titulo'] = get_the_title();
            $lastupdate['publicacao'] = get_the_date('j') . " de " . get_the_date('F') . " de " . get_the_date('Y') . " às " . get_the_date('G:i') . "h";
            $lastupdate['atualizacao'] = get_the_modified_time('j') . " de " . get_the_modified_time('F') . " de " . get_the_modified_time('Y') . " às " . get_the_modified_time('G:i') . "h";
        endwhile;
    endif;

    wp_reset_query();
    return $lastupdate;
}
