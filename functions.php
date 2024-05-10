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
    add_post_type_support( 'page', 'excerpt' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'anna', get_stylesheet_directory_uri() . '/resources/js/anna.js', array('jquery'), '1.0.0', true );
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

function myplugin_settings() {  
    // Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page'); 
    // Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');  
}
 // Add to the admin_init hook of your theme functions.php file 
add_action( 'init', 'myplugin_settings' );

function mrct_btn( string $btn_text = 'default button', string $btn_url = '#', string $btn_style = 'bg-gray-100', string $btn_target = '_self') {
	echo "<a href=\"$btn_url\" target=\"$btn_target\" class=\"btn $btn_style\">$btn_text</a>";
}

add_filter( 'use_block_editor_for_post', '__return_false' );






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




function custom_menu_script() { ?>
  <script>
document.addEventListener("DOMContentLoaded", function() {
  if (document.body.classList.contains("home")) {
    var menuItems = document.querySelectorAll(".av-main-nav .menu-item");
    function clearMenuStyles() {
      menuItems.forEach(function(item) {
        var aviaMenuFx = item.querySelector(".avia-menu-fx");
        if (aviaMenuFx) {
          aviaMenuFx.style.opacity = "0";
          aviaMenuFx.style.visibility = "hidden";
          aviaMenuFx.style.bottom = "0";
        }
      });
    }
    function setActiveMenuItem(hash) {
      menuItems.forEach(function(item) {
        var menuItemLink = item.querySelector("a");
        if (menuItemLink.hash === hash) {
          var aviaMenuFx = item.querySelector(".avia-menu-fx");
          if (aviaMenuFx) {
            aviaMenuFx.style.opacity = "1";
            aviaMenuFx.style.visibility = "visible";
            aviaMenuFx.style.bottom = "30%";
          }
        }
      });
    }
    menuItems.forEach(function(menuItem) {
      menuItem.querySelector("a").addEventListener("click", function(event) {
        clearMenuStyles();
        setActiveMenuItem(this.hash);
        history.pushState(null, null, this.href);
      });
    });
    if (window.location.hash) {
      clearMenuStyles();
      setActiveMenuItem(window.location.hash);
    }
  }
});
</script>
  <?php
}
add_action( 'wp_footer', 'custom_menu_script', 99 );
