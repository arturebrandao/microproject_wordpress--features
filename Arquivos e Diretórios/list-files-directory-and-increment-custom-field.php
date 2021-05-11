<?php

// LISTANDO NOMES DE ARQUIVOS DE DIRETÓRIO ESPECÍFICO PARA DENTRO DE INPUT RADIO
function list_files_by_directory($field)
{
    $bloginfo = get_bloginfo('template_url');
    $diretorio = get_template_directory();
    $caminho = '/assets/arquivos/*';
    $folder = '/assets/arquivos/';

    $diretorio = str_replace('\\', '/', $diretorio);
    $dir_path = $diretorio . $caminho;
    $bkgrds = glob($dir_path);

    if (is_array($bkgrds)) {
        foreach ($bkgrds as $post_type) {
            $parts = parse_url($post_type);
            $filename = basename($parts["path"]);
            $filenameWithoutExtension = pathinfo($filename);
            $filenameWithoutExtension = $filenameWithoutExtension['filename'];

            $field['choices'][$filenameWithoutExtension] = $filenameWithoutExtension;
        }
        return $field;
    }
}
add_filter('acf/load_field/name=name_custom_field', 'list_files_by_directory');
