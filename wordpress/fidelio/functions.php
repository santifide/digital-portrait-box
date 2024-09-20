<?php
function fidelio_remove_cpt_slug($post_link, $post) {
    if ('proyectos' === $post->post_type && 'publish' === $post->post_status) {
        $post_link = str_replace('/proyectos/', '/', $post_link);
    }
    return $post_link;
}
add_filter('post_type_link', 'fidelio_remove_cpt_slug', 10, 2);
function fidelio_add_rewrite_rules() {
    add_rewrite_rule('^([^/]+)?$', 'index.php?proyectos=$matches[1]', 'top');
}

add_action('init', 'fidelio_add_rewrite_rules');


// functions.php

function mi_tema_scripts() {
    // Registrar y encolar CSS
    wp_enqueue_style('mi-tema-estilos', get_template_directory_uri() . 'assets/css/animation.css', array(), '1.0', 'all');
    
    // Registrar y encolar JavaScript
   // wp_enqueue_script('mi-tema-scripts', get_template_directory_uri() . '/js/archivo.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mi_tema_scripts');
