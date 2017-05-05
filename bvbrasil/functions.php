<?php 
	
//Habilitando imagens destacadas
add_theme_support('post-thumbnails');
add_image_size('thumb-custom', 232, 156, true);


/**************************************
 * Registro Custom Post type profissional
 **************************************/
add_action('init', 'videos_registrer');
function videos_registrer(){
     $labels = array(
        'name' => _x('Vídeos', 'post type general name'),
        'singular_name' => _x('Vídeos', 'post type singular name'),
        'add_new' => _x('Adicionar novo video', 'video'),
        'add_new_item' => __('Adicionar novo'),
        'edit_item' => __('Editar video'),
        'new_item' => __('Novo video'),
        'view_item' => __('Ver video'),
        'search_items' => __('Procurar video'),
        'not_found' =>  __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado no lixo'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => false, 
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 4,
        'supports' => array('title'),
      );
    register_post_type('videos',$args);
}