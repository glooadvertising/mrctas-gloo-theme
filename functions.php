<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'anna', get_stylesheet_directory_uri() . '/resources/js/anna.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );


// MRCT Custom functions

function mrct_btn($btn_text = 'default button', $btn_url = '#', $btn_style = 'bg-gray-100', $btn_target = '_self') {
	echo "<a href=\"$btn_url\" target=\"$btn_target\" class=\"btn $btn_style\">$btn_text</a>";
}

add_filter( 'use_block_editor_for_post', '__return_false' );

// CPT

// Register Custom Post Type
function custom_post_type_board_members() {

	$labels = array(
		'name'                  => _x( 'Board Members', 'Post Type General Name', 'mrctas' ),
		'singular_name'         => _x( 'Board Member', 'Post Type Singular Name', 'mrctas' ),
		'menu_name'             => __( 'Board Members', 'mrctas' ),
		'name_admin_bar'        => __( 'Board Member', 'mrctas' ),
		'archives'              => __( 'Board Member Archives', 'mrctas' ),
		'attributes'            => __( 'Board Member Attributes', 'mrctas' ),
		'parent_item_colon'     => __( 'Parent Board Member:', 'mrctas' ),
		'all_items'             => __( 'All Board Members', 'mrctas' ),
		'add_new_item'          => __( 'Add New Board Member', 'mrctas' ),
		'add_new'               => __( 'Add New', 'mrctas' ),
		'new_item'              => __( 'New Board Member', 'mrctas' ),
		'edit_item'             => __( 'Edit Board Member', 'mrctas' ),
		'update_item'           => __( 'Update Board Member', 'mrctas' ),
		'view_item'             => __( 'View Board Member', 'mrctas' ),
		'view_items'            => __( 'View Board Members', 'mrctas' ),
		'search_items'          => __( 'Search Board Member', 'mrctas' ),
		'not_found'             => __( 'Not found', 'mrctas' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'mrctas' ),
		'featured_image'        => __( 'Featured Image', 'mrctas' ),
		'set_featured_image'    => __( 'Set featured image', 'mrctas' ),
		'remove_featured_image' => __( 'Remove featured image', 'mrctas' ),
		'use_featured_image'    => __( 'Use as featured image', 'mrctas' ),
		'insert_into_item'      => __( 'Insert into Board Member', 'mrctas' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Board Member', 'mrctas' ),
		'items_list'            => __( 'Board Members list', 'mrctas' ),
		'items_list_navigation' => __( 'Board Members list navigation', 'mrctas' ),
		'filter_items_list'     => __( 'Filter Board Members list', 'mrctas' ),
	);
	$args = array(
		'label'                 => __( 'Board Member', 'mrctas' ),
		'description'           => __( 'Board Members', 'mrctas' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'text_domain'           => 'mrctas',
	);
	register_post_type( 'board_members', $args );

}
add_action( 'init', 'custom_post_type_board_members', 0 );



function register_annual_reports_post_type() {
    $labels = array(
        'name'                  => _x('Annual Reports', 'Post type general name', 'mrctas'),
        'singular_name'         => _x('Annual Report', 'Post type singular name', 'mrctas'),
        'menu_name'             => _x('Annual Reports', 'Admin Menu text', 'mrctas'),
        'name_admin_bar'        => _x('Annual Report', 'Add New on Toolbar', 'mrctas'),
        'add_new'               => __('Add New', 'mrctas'),
        'add_new_item'          => __('Add New Annual Report', 'mrctas'),
        'new_item'              => __('New Annual Report', 'mrctas'),
        'edit_item'             => __('Edit Annual Report', 'mrctas'),
        'view_item'             => __('View Annual Report', 'mrctas'),
        'all_items'             => __('All Annual Reports', 'mrctas'),
        'search_items'          => __('Search Annual Reports', 'mrctas'),
        'parent_item_colon'     => __('Parent Annual Reports:', 'mrctas'),
        'not_found'             => __('No annual reports found.', 'mrctas'),
        'not_found_in_trash'    => __('No annual reports found in Trash.', 'mrctas'),
        'featured_image'        => _x('Annual Report Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'mrctas'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'mrctas'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'mrctas'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'mrctas'),
        'archives'              => _x('Annual Report archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'mrctas'),
        'insert_into_item'      => _x('Insert into annual report', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'mrctas'),
        'uploaded_to_this_item' => _x('Uploaded to this annual report', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'mrctas'),
        'filter_items_list'     => _x('Filter annual reports list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”. Added in 4.4', 'mrctas'),
        'items_list_navigation' => _x('Annual Reports list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”. Added in 4.4', 'mrctas'),
        'items_list'            => _x('Annual Reports list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”. Added in 4.4', 'mrctas'),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Description.', 'mrctas'),
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'annual-reports'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title'),
        'menu_icon'          => 'dashicons-portfolio',
    );

    register_post_type('annual_reports', $args);
}
add_action('init', 'register_annual_reports_post_type');


function register_financial_statements_post_type() {
    $labels = array(
        'name'                  => _x('Financial Statements', 'Post type general name', 'mrctas'),
        'singular_name'         => _x('Financial Statement', 'Post type singular name', 'mrctas'),
        'menu_name'             => _x('Financial Statements', 'Admin Menu text', 'mrctas'),
        'name_admin_bar'        => _x('Financial Statement', 'Add New on Toolbar', 'mrctas'),
        'add_new'               => __('Add New', 'mrctas'),
        'add_new_item'          => __('Add New Financial Statement', 'mrctas'),
        'new_item'              => __('New Financial Statement', 'mrctas'),
        'edit_item'             => __('Edit Financial Statement', 'mrctas'),
        'view_item'             => __('View Financial Statement', 'mrctas'),
        'all_items'             => __('All Financial Statements', 'mrctas'),
        'search_items'          => __('Search Financial Statements', 'mrctas'),
        'parent_item_colon'     => __('Parent Financial Statements:', 'mrctas'),
        'not_found'             => __('No financial statements found.', 'mrctas'),
        'not_found_in_trash'    => __('No financial statements found in Trash.', 'mrctas'),
        'featured_image'        => _x('Financial Statement Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'mrctas'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'mrctas'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'mrctas'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'mrctas'),
        'archives'              => _x('Financial Statement archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'mrctas'),
        'insert_into_item'      => _x('Insert into financial statement', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'mrctas'),
        'uploaded_to_this_item' => _x('Uploaded to this financial statement', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'mrctas'),
        'filter_items_list'     => _x('Filter financial statements list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”. Added in 4.4', 'mrctas'),
        'items_list_navigation' => _x('Financial Statements list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”. Added in 4.4', 'mrctas'),
        'items_list'            => _x('Financial Statements list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”. Added in 4.4', 'mrctas'),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Description.', 'mrctas'),
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'financial-statements'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title'),
        'menu_icon'          => 'dashicons-chart-line',
    );

    register_post_type('financial_statements', $args);
}
add_action('init', 'register_financial_statements_post_type');

function register_impact_reports_post_type() {
    $labels = array(
        'name'                  => _x('Impact Reports', 'Post type general name', 'mrctas'),
        'singular_name'         => _x('Impact Report', 'Post type singular name', 'mrctas'),
        'menu_name'             => _x('Impact Reports', 'Admin Menu text', 'mrctas'),
        'name_admin_bar'        => _x('Impact Report', 'Add New on Toolbar', 'mrctas'),
        'add_new'               => __('Add New', 'mrctas'),
        'add_new_item'          => __('Add New Impact Report', 'mrctas'),
        'new_item'              => __('New Impact Report', 'mrctas'),
        'edit_item'             => __('Edit Impact Report', 'mrctas'),
        'view_item'             => __('View Impact Report', 'mrctas'),
        'all_items'             => __('All Impact Reports', 'mrctas'),
        'search_items'          => __('Search Impact Reports', 'mrctas'),
        'parent_item_colon'     => __('Parent Impact Reports:', 'mrctas'),
        'not_found'             => __('No impact reports found.', 'mrctas'),
        'not_found_in_trash'    => __('No impact reports found in Trash.', 'mrctas'),
        'featured_image'        => _x('Impact Report Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'mrctas'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'mrctas'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'mrctas'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'mrctas'),
        'archives'              => _x('Impact Report archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'mrctas'),
        'insert_into_item'      => _x('Insert into impact report', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'mrctas'),
        'uploaded_to_this_item' => _x('Uploaded to this impact report', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'mrctas'),
        'filter_items_list'     => _x('Filter impact reports list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”. Added in 4.4', 'mrctas'),
        'items_list_navigation' => _x('Impact Reports list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”. Added in 4.4', 'mrctas'),
        'items_list'            => _x('Impact Reports list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”. Added in 4.4', 'mrctas'),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Description.', 'mrctas'),
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'impact-reports'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title'),
        'menu_icon'          => 'dashicons-analytics',
    );

    register_post_type('impact_reports', $args);
}
add_action('init', 'register_impact_reports_post_type');




// metabox
// Add meta box for "Role" field
function add_board_member_role_meta_box() {
    add_meta_box(
        'board_member_role_meta_box', // Meta box ID
        'Board Member Role', // Title
        'display_board_member_role_meta_box', // Callback function
        'board_members', // Post type to display meta box
        'normal', // Context
        'default' // Priority
    );
}
add_action('add_meta_boxes', 'add_board_member_role_meta_box');

// Display meta box content
function display_board_member_role_meta_box($post) {
    // Retrieve current value of role
    $role = get_post_meta($post->ID, 'board_member_role', true);
    ?>
    <label for="board_member_role">Role:</label>
    <input type="text" id="board_member_role" name="board_member_role" value="<?php echo esc_attr($role); ?>" style="width: 100%;" />
    <?php
    // Add nonce for security and verification
    wp_nonce_field('board_member_role_meta_box_nonce', 'board_member_role_meta_box_nonce');
}

// Save the meta box data
function save_board_member_role_meta_data($post_id) {
    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // Check if nonce is set
    if (!isset($_POST['board_member_role_meta_box_nonce']) || !wp_verify_nonce($_POST['board_member_role_meta_box_nonce'], 'board_member_role_meta_box_nonce')) return;

    // Check if the current user has permission to save the data
    if (!current_user_can('edit_post', $post_id)) return;

    // Save role data
    if (isset($_POST['board_member_role'])) {
        update_post_meta($post_id, 'board_member_role', sanitize_text_field($_POST['board_member_role']));
    }
}
add_action('save_post', 'save_board_member_role_meta_data');




/**
 * Add custom attachment metabox.
 */
function add_custom_meta_boxes() {
	add_meta_box( 
		'wp_custom_attachment',
		'PDF File',
		'wp_custom_attachment',
		[
			'post', 
			'annual_reports', 
			'financial_statements',
			'impact_reports'
		],
		'side'
	) ;
}
add_action( 'add_meta_boxes', 'add_custom_meta_boxes' );

/**
 * Custom attachment metabox markup.
 */
function wp_custom_attachment() {
	$html ='';
	wp_nonce_field( plugin_basename(__FILE__), 'wp_custom_attachment_nonce' );
	$html = '<p class="description">Upload your PDF here.</p>';
	$html .= '<input id="wp_custom_attachment" name="wp_custom_attachment" size="25" type="file" value="" />';

	$filearray = get_post_meta( get_the_ID(), 'wp_custom_attachment', true );
	if($filearray) {
		$this_file = $filearray['url'];
		
		if ( $this_file != '' ) { 
				$html .= '<div><p>Current file: ' . $this_file . '</p></div>'; 
		}
	}
	echo $html; 
}

/**
 * Save custom attachment metabox info.
 */
function save_custom_meta_data( $id ) {
	if ( ! empty( $_FILES['wp_custom_attachment']['name'] ) ) {
		$supported_types = array( 'application/pdf' );
		$arr_file_type = wp_check_filetype( basename( $_FILES['wp_custom_attachment']['name'] ) );
		$uploaded_type = $arr_file_type['type'];

		if ( in_array( $uploaded_type, $supported_types ) ) {
			$upload = wp_upload_bits($_FILES['wp_custom_attachment']['name'], null, file_get_contents($_FILES['wp_custom_attachment']['tmp_name']));
			if ( isset( $upload['error'] ) && $upload['error'] != 0 ) {
				wp_die( 'There was an error uploading your file. The error is: ' . $upload['error'] );
			} else {
				add_post_meta( $id, 'wp_custom_attachment', $upload );
				update_post_meta( $id, 'wp_custom_attachment', $upload );
			}
		}
		else {
			wp_die( "The file type that you've uploaded is not a PDF." );
		}
	}
}
add_action( 'save_post', 'save_custom_meta_data' );
/**
 * Add functionality for file upload.
 */
function update_edit_form() {
	echo ' enctype="multipart/form-data"';
}
add_action( 'post_edit_form_tag', 'update_edit_form' );
