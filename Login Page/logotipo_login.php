<?php
// URL DE ACESSO DO LOGOTIPO
function loginpage_logo_url()
{
    return get_bloginfo('url');
}
add_filter('login_headerurl', 'loginpage_logo_url');

// TITLE NAME DO LOGOTIPO
function loginpage_logo_title()
{
    if (get_costumer_theme('page_title')) {
        return get_costumer_theme('page_title');
    } else {
        return 'voltar para portal';
    }
}
add_filter('login_headertitle', 'loginpage_logo_title');
