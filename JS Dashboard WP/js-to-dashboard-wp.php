<?php

function load_custom_script()
{
    // Inserindo JS interno do tema, onde o arquivo funcoes.js estará salvo no diretório "assets/js" dentro do próprio tema.
    wp_enqueue_script('insert_my_js_dashboard', get_bloginfo('template_url') . '/assets/js/funcoes.js', array(), false, true);
}
add_action('admin_enqueue_scripts', 'load_custom_script');

/* 
    [true] no último parâmetro da chamada da função "wp_enqueue_script" adiciona o script no footer do codigo dashboard.
    [false] no último parâmetro da chamada da função "wp_enqueue_script" adiciona o script no header do codigo dashboard.
*/