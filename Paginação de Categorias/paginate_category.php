<?php
function paginate_category($query)
{
    if ($query->is_main_query() && !$query->is_feed() && !is_admin() && is_category()) {
        $query->set('page_val', get_query_var('paged'));
        $query->set('paged', 0);
    }
}
add_action('pre_get_posts', 'paginate_category');
