<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'slider',
    array(
      'labels' => array(
        'name' => __( 'Slides' ),
        'singular_name' => __( 'Slide' ),
        'menu_name'           => 'Slides',
        'parent_item_colon'   => __( 'Parent Slide', 'twentythirteen' ),
        'all_items'           => __( 'All Slides', 'twentythirteen' ),
        'view_item'           => __( 'View Slide', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Slide', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Slide', 'twentythirteen' ),
        'update_item'         => __( 'Update Slide', 'twentythirteen' ),
        'search_items'        => __( 'Search Slide', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
      ),
       'supports'            => array( 'title', 'thumbnail' ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
?>