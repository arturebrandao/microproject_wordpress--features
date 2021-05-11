<?php   
    // CRIANDO NOVOS CUSTOM POST TYPES
	function new_custom_post_type() {
		
		// Post Type Convênios
		register_post_type('convenios', 
			array(
				'label'             => 'Convênios',
				'description'       => 'Convênios',
				'public'            => true,
				'show_ui'           => true,
				'show_in_menu'      => true,
				'capability_type'   => 'post',
				'map_meta_cap'      => true,
				'hierarchical'      => false,
				'rewrite'           => array('slug' => 'convenios', 'with_front' => true),
				'query_var'         => true,
				'menu_icon'         => 'dashicons-screenoptions',
				'supports'          => array('date', 'title'),
				'taxonomies'        => array( 'category' ),

				'labels' => array (
					'name'                  => 'Convênios',
					'singular_name'         => 'Convênios',
					'menu_name'             => 'Convênios',
					'add_new'               => 'Cadastrar Convênio',
					'add_new_item'          => 'Novo Convênio',
					'edit'                  => 'Editar',
					'edit_item'             => 'Editar Convênio',
					'new_item'              => 'Novo Convênio',
					'view'                  => 'Ver Convênios',
					'view_item'             => 'Ver Convênios',
					'search_items'          => 'Procurar Convênios',
					'not_found'             => 'Nenhum Convênio encontrado',
					'not_found_in_trash'    => 'Nenhum Convênio encontrado no lixo',
				)
			)
		);

	}
	add_action('init', 'new_custom_post_type');
