<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'book',
    array(
      'labels' => array(
        'name' => __( 'Books' ),
        'singular_name' => __( 'Book' ),
        'menu_name'           => 'Books',
        'parent_item_colon'   => __( 'Parent Book', 'twentyfifteen' ),
        'all_items'           => __( 'All Books', 'twentyfifteen' ),
        'view_item'           => __( 'View Book', 'twentyfifteen' ),
        'add_new_item'        => __( 'Add New Book', 'twentyfifteen' ),
        'add_new'             => __( 'Add New', 'twentyfifteen' ),
        'edit_item'           => __( 'Edit Book', 'twentyfifteen' ),
        'update_item'         => __( 'Update Book', 'twentyfifteen' ),
        'search_items'        => __( 'Search Book', 'twentyfifteen' ),
        'not_found'           => __( 'Not Found', 'twentyfifteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentyfifteen' ),
      ),
       'supports'            => array( 'title', 'editor', 'thumbnail' ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
?>