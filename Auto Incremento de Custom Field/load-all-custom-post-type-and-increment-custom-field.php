<?php

function load_all_post_types($field)
{
    $post_types = get_post_types('', 'names');

    foreach ($post_types as $arg) {
        $objs[] = get_post_type_object($arg);
    }

    foreach ($objs as $obj) {
        $field['choices'][$obj->name] = $obj->labels->singular_name;
    }

    return $field;
}
add_filter('acf/load_field/name=name_custom_field', 'load_all_post_types');
