<?php
add_action( 'wp_enqueue_scripts', function () {

	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//code.jquery.com/jquery-3.4.1.min.js');
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js',  array('jquery'), 'null', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js',  array('jquery'), 'null', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js',  array('jquery'), 'null', true);
});
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');



    register_nav_menus(array(
        'main-menu' => __('Main Menu'),
    ));

    // add_action('after_setup_theme', 'vintage_setup')

    function custom_damage_taxonomy() {
        $labels = array(
            'name'              => _x( 'Damage', 'taxonomy general name', 'textdomain' ),
            'singular_name'     => _x( 'Damage', 'taxonomy singular name', 'textdomain' ),
            'search_items'      => __( 'Search Damage', 'textdomain' ),
            'all_items'         => __( 'All Damage', 'textdomain' ),
            'parent_item'       => __( 'Parent Damage', 'textdomain' ),
            'parent_item_colon' => __( 'Parent Damage:', 'textdomain' ),
            'edit_item'         => __( 'Edit Damage', 'textdomain' ),
            'update_item'       => __( 'Update Damage', 'textdomain' ),
            'add_new_item'      => __( 'Add New Damage', 'textdomain' ),
            'new_item_name'     => __( 'New Damage Name', 'textdomain' ),
            'menu_name'         => __( 'Damage', 'textdomain' ),
        );
    
        $args = array(
            'labels' => $labels,
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'damage' ),
            
        );
    
        register_taxonomy( 'damage', array( 'post' ), $args );
    }
    add_action( 'init', 'custom_damage_taxonomy', 0 );
    
    
    function custom_category_taxonomy() {
        $labels = array(
            'name'              => _x( 'Category Objects', 'taxonomy general name', 'textdomain' ),
            'singular_name'     => _x( 'Category Object', 'taxonomy singular name', 'textdomain' ),
            'search_items'      => __( 'Search Category Objects', 'textdomain' ),
            'all_items'         => __( 'All Category Objects', 'textdomain' ),
            'parent_item'       => __( 'Parent Category Object', 'textdomain' ),
            'parent_item_colon' => __( 'Parent Category Object:', 'textdomain' ),
            'edit_item'         => __( 'Edit Category Object', 'textdomain' ),
            'update_item'       => __( 'Update Category Object', 'textdomain' ),
            'add_new_item'      => __( 'Add New Category Object', 'textdomain' ),
            'new_item_name'     => __( 'New Category Object Name', 'textdomain' ),
            'menu_name'         => __( 'Category Objects', 'textdomain' ),
        );
    
        $args = array(
            'labels' => $labels,
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'cotegory' ),
            'meta_box_cb' => 'show_custom_taxonomy_meta_box'
        );
    
        register_taxonomy( 'cotegory', array( 'post' ), $args );
    }
    add_action( 'init', 'custom_category_taxonomy', 0 );
    

    function custom_subcategory_taxonomy() {
        $labels = array(
            'name'              => _x( 'Subcategory', 'taxonomy general name', 'textdomain' ),
            'singular_name'     => _x( 'Subcategory', 'taxonomy singular name', 'textdomain' ),
            'search_items'      => __( 'Search Subcategory', 'textdomain' ),
            'all_items'         => __( 'All Subcategory', 'textdomain' ),
            'parent_item'       => __( 'Parent Subcategory', 'textdomain' ),
            'parent_item_colon' => __( 'Parent Subcategory:', 'textdomain' ),
            'edit_item'         => __( 'Edit Subcategory', 'textdomain' ),
            'update_item'       => __( 'Update Subcategory', 'textdomain' ),
            'add_new_item'      => __( 'Add New Subcategory', 'textdomain' ),
            'new_item_name'     => __( 'New Subcategory Name', 'textdomain' ),
            'menu_name'         => __( 'Subcategory', 'textdomain' ),
        );
    
        $args = array(
            'labels' => $labels,
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'subcategory' ),
        );
    
        register_taxonomy( 'subcategory', array( 'post' ), $args );
    }
    
    add_action( 'init', 'custom_subcategory_taxonomy', 0 );


    function custom_search_filter($query) {
        if ( !is_admin() && $query->is_main_query() ) {
            if ( isset($_GET['s']) && !empty($_GET['s']) ) {
                $search_text = sanitize_text_field($_GET['s']);
                $query->set('s', $search_text);
            }
        }
    }
    add_action('pre_get_posts', 'custom_search_filter');


    function custom_rewrite_rules() {
        add_rewrite_rule(
            '^([^/]*)/categories/([^/]*)/([^/]*)/?',
            'index.php?category=$matches[2]&name=$matches[3]&language=$matches[1]',
            'top'
        );
    }
    add_action('init', 'custom_rewrite_rules');
    
    function custom_query_vars($query_vars) {
        $query_vars[] = 'category';
        $query_vars[] = 'name';
        $query_vars[] = 'language';
        return $query_vars;
    }
    add_filter('query_vars', 'custom_query_vars');
    
    function custom_permalink_structure($permalink, $post, $leavename) {
        $language = get_query_var('language');
        $category = get_query_var('category');
        $name = get_query_var('name');
        
        if ($language && $category && $name) {
            $permalink = home_url("/$language/categories/$category/$name/");
        }
        
        return $permalink;
    }
    add_filter('post_link', 'custom_permalink_structure', 10, 3);
    add_filter('post_type_link', 'custom_permalink_structure', 10, 3);

    ?>