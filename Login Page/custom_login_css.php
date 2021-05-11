<?php
function custom_login_css()
{
    // Inserindo CSS de Login do tema, onde o arquivo style.css estará salvo no diretório "assets/login" dentro do próprio tema.
    echo "<link rel='stylesheet' type='text/css' href='" . get_bloginfo('template_url') . "/assets/login/style.css'>";
}
add_action('login_head', 'custom_login_css');
