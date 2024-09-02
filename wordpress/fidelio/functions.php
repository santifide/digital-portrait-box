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
