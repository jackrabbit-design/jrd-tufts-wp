<?php

$postName         = 'Menus'; // Name of post type
$postNameSlug     = 'menu'; // Name of post type
$postNameSingular = 'Menu'; // Singular Name
$postNamePlural   = 'Menus'; // Plural Name
register_post_type(
	$postNameSlug, array(
		'labels' => array(
	       'name' => $postName,
	       'singular_name' => $postNameSingular,
	       'add_new' => 'Add ' . $postNameSingular,
	       'add_new_item' => 'Add ' . $postNameSingular,
	       'edit_item' => 'Edit ' . $postNameSingular,
	       'search_items' => 'Search ' . $postNamePlural,
	       'not_found' => 'No ' . $postNamePlural. ' found',
	       'not_found_in_trash' => 'No ' . $postNamePlural. ' found in trash'
	    ),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'rewrite' => array('slug' => $postNameSlug),
		'query_var' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'supports' => array(
    		'title',
    		'thumbnail',
    		'revisions'
		)
	)
);


$taxonomyName         = 'Menu Type';
$taxonomyNameSlug     = 'menu-type';
$taxonomyNameSingular = 'Menu Type';
$taxonomyNamePlural   = 'Menu Types';
register_taxonomy(
	$taxonomyNameSlug, array('menu'), array( 
		'hierarchical' => true, // Category or Tag functionality
		'query_var' => true,
		'rewrite' => array('slug' => $taxonomyNameSlug),
		'labels' => array(
		     'name' => $taxonomyName,
		     'singular_name' => $taxonomyNameSingular,
		     'search_items' => 'Search ' . $taxonomyNamePlural,
		     'popular_items' => 'Popular ' . $taxonomyNamePlural,
		     'all_items' => 'All ' . $taxonomyNamePlural,
		     'parent_item' => null,
		     'parent_item_colon' => null,
		     'edit_item' => 'Edit ' . $taxonomyNameSingular,
		     'update_item' => 'Update ' . $taxonomyNameSingular,
		     'add_new_item' => 'Add New ' . $taxonomyNameSingular,
		     'new_item_name' => 'New ' . $taxonomyNameSingular,
		     'separate_items_with_commas' => 'Separate ' . $taxonomyNamePlural . ' with commas',
		     'add_or_remove_items' => 'Add or remove ' . $taxonomyNamePlural,
		     'choose_from_most_used' => 'Choose from most used ' . $taxonomyNamePlural
		 )
	)
);

$postName         = 'Testimonials'; // Name of post type
$postNameSlug     = 'testimonial'; // Name of post type
$postNameSingular = 'Testimonial'; // Singular Name
$postNamePlural   = 'Testimonials'; // Plural Name
register_post_type(
	$postNameSlug, array(
		'labels' => array(
	       'name' => $postName,
	       'singular_name' => $postNameSingular,
	       'add_new' => 'Add ' . $postNameSingular,
	       'add_new_item' => 'Add ' . $postNameSingular,
	       'edit_item' => 'Edit ' . $postNameSingular,
	       'search_items' => 'Search ' . $postNamePlural,
	       'not_found' => 'No ' . $postNamePlural. ' found',
	       'not_found_in_trash' => 'No ' . $postNamePlural. ' found in trash'
	    ),
		'public' => false,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'rewrite' => array('slug' => $postNameSlug),
		'query_var' => true,
		'show_in_nav_menus' => false,
		'exclude_from_search' => true,
		'has_archive' => false,
		'supports' => array(
    		'title',
    		'revisions'
		)
	)
);

