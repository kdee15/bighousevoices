<?php
/**
 * bighousevoices functions and definitions
 *
 * @package bighousevoices
 */

// bighousevoices functions and definitions ##############################################################################

// A.1 CUSTOM FUNCIONS +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    // A.1.0. Generic Sitewide Functions ---------------------------------------------------------------------------

    /**
     * Set the content width based on the theme's design and stylesheet.
     */

    if ( ! isset( $content_width ) ) {
        $content_width = 640; /* pixels */
    }

    if ( ! function_exists( 'bighousevoices_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function bighousevoices_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on bighousevoices, use a find and replace
         * to change 'bighousevoices' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'bighousevoices', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        //add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'bighousevoices' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ) );

        /*
         * Enable support for Post Formats.
         * See http://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'bighousevoices_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
    }
    endif; // bighousevoices_setup
    add_action( 'after_setup_theme', 'bighousevoices_setup' );

    /**
     * Enqueue scripts and styles.
     */
    function bighousevoices_scripts() {
        wp_enqueue_style( 'bighousevoices-style', get_stylesheet_uri() );

        wp_enqueue_script( 'bighousevoices-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

        wp_enqueue_script( 'bighousevoices-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'bighousevoices_scripts' );



    /**
     * Implement the Custom Header feature.
     */
    //require get_template_directory() . '/inc/custom-header.php';

    /**
     * Custom template tags for this theme.
     */
    require get_template_directory() . '/inc/template-tags.php';

    /**
     * Custom functions that act independently of the theme templates.
     */
    require get_template_directory() . '/inc/extras.php';

    /**
     * Customizer additions.
     */
    require get_template_directory() . '/inc/customizer.php';

    /**
     * Load Jetpack compatibility file.
     */
    require get_template_directory() . '/inc/jetpack.php';

    // A.1.0. END ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    // A.1.1. FEATURED IMAGE  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'carousel-thumb', 1200, 900, false );
    add_image_size( 'teaser-thumb', 1024, 768, true );

    // A.1.1. END ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.1 END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.2 CUSTOM CONTENT TYPES ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    // A.2.1. PROJECTS ---------------------------------------------------------------------------------------------

    function artists() {
      $labels = array(
        'Title'              => _x( 'Artists', 'post type general name' ),
        'singular_name'      => _x( 'Artist', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Artist' ),
        'add_new_item'       => __( 'Add New Artist' ),
        'edit_item'          => __( 'Edit Artist' ),
        'new_item'           => __( 'New Artist' ),
        'all_items'          => __( 'All Artists' ),
        'view_item'          => __( 'View Artist' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Artists'
      );

      $args = array(
        'labels'         => $labels,
        'description'   => 'A list of Artists',
        'public'        => true,
        'menu_position' => 4,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories' ),
        'has_archive'   => true,

      );
        
      register_post_type( 'artists', $args ); 
    }

    add_action( 'init', 'artists' );

    // A.2.1. End --------------------------------------------------------------------------------------------------

// A.2 END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.3 WIDGETS & SIDEBARS ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function bighousevoices_widgets_init() {

	register_sidebar( array(
		'name'          => 'Homepage Widgets',
		'id'            => 'homepage',
		'before_widget' => '<aside id="%1$s" class="front-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
    
    register_sidebar( array(
		'name'          => 'Press Sidebar',
		'id'            => 'pressbar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
        
    register_sidebar( array(
		'name'          => 'Archive Sidebar',
		'id'            => 'archivebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
    
    register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

}
add_action( 'widgets_init', 'bighousevoices_widgets_init' );

// A.3 END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// END OF FILE #####################################################################################################















