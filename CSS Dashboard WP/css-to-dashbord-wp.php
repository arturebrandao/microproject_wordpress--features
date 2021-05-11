<?php

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts()
{
    // Inserindo CSS interno do tema, onde o arquivo dashboard.css estará salvo no diretório "assets/css" dentro do próprio tema.
    echo "<link rel='stylesheet' type='text/css' href='" . get_bloginfo('template_url') . "/assets/css/dashboard.css'>";

    // Inserindo CSS externo
    echo "<link rel='stylesheet' type='text/css' href='http://dominio-externo.com/assets/css/dashboard.css'>";
}
