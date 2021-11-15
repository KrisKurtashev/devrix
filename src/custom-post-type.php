<?php

/**
 * Custom class to create new post types.
 */
class CustomPostType
{
    private $settings;

    /**
     *
     */
    public function __construct($name, $singular_name, $slug, $taxonomies = [])
    {
        $this->settings = [
            'name' => $name,
            'singular_name' => $singular_name,
            'slug' => $slug,
            'taxonomies' => $taxonomies,
        ];

        add_action('init', [&$this, 'add_custom_post_type']);
    }

    public function add_custom_post_type()
    {
        $labels = [
            'name' => _x($this->settings['name'], 'Post Type General Name', 'twentytwentyone-kris'),
            'singular_name' => _x($this->settings['singular_name'], 'Post Type Singular Name', 'twentytwentyone-kris'),
            'menu_name' => __($this->settings['name'], 'twentytwentyone-kris'),
            'name_admin_bar' => __('Post Type', 'twentytwentyone-kris'),
            'archives' => __('Item Archives', 'twentytwentyone-kris'),
            'attributes' => __('Item Attributes', 'twentytwentyone-kris'),
            'parent_item_colon' => __('Parent Item:', 'twentytwentyone-kris'),
            'all_items' => __('All ' . $this->settings['name'], 'twentytwentyone-kris'),
            'add_new_item' => __('Add New Item', 'twentytwentyone-kris'),
            'add_new' => __('Add New', 'twentytwentyone-kris'),
            'new_item' => __('New Item', 'twentytwentyone-kris'),
            'edit_item' => __('Edit Item', 'twentytwentyone-kris'),
            'update_item' => __('Update Item', 'twentytwentyone-kris'),
            'view_item' => __('View Item', 'twentytwentyone-kris'),
            'view_items' => __('View Items', 'twentytwentyone-kris'),
            'search_items' => __('Search Item', 'twentytwentyone-kris'),
            'not_found' => __('Not found', 'twentytwentyone-kris'),
            'not_found_in_trash' => __('Not found in Trash', 'twentytwentyone-kris'),
            'featured_image' => __('Featured Image', 'twentytwentyone-kris'),
            'set_featured_image' => __('Set featured image', 'twentytwentyone-kris'),
            'remove_featured_image' => __('Remove featured image', 'twentytwentyone-kris'),
            'use_featured_image' => __('Use as featured image', 'twentytwentyone-kris'),
            'insert_into_item' => __('Insert into item', 'twentytwentyone-kris'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'twentytwentyone-kris'),
            'items_list' => __('Items list', 'twentytwentyone-kris'),
            'items_list_navigation' => __('Items list navigation', 'twentytwentyone-kris'),
            'filter_items_list' => __('Filter items list', 'twentytwentyone-kris'),
        ];

        $args = array(
            'label' => __($this->settings['name'], 'twentytwentyone-kris'),
            'description' => __($this->settings['name'], 'twentytwentyone-kris'),
            'labels' => $labels,
            'supports' => array('title', 'thumbnail', 'excerpt'),
            'hierarchical' => false,
            'taxonomies' => $this->settings['taxonomies'],
            'public' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        );
        register_post_type($this->settings['slug'], $args);
    }
}
