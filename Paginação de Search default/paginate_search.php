<?php
function paginate_search($query)
{
    if ($query->is_search()) {
        $query->set('posts_per_page', '12');
    }
}
add_action('pre_get_posts', 'paginate_search');
