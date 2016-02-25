<?php
/**
 * crio-msv functions and definitions
 *
 * @package crio-msv
 */

// crio-msv functions and definitions ##############################################################################

// A.1 CUSTOM FUNCIONS +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    // A.1.0. Generic Sitewide Functions ---------------------------------------------------------------------------

    /**
     * Set the content width based on the theme's design and stylesheet.
     */

    if ( ! isset( $content_width ) ) {
        $content_width = 640; /* pixels */
    }

    if ( ! function_exists( 'crio_msv_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function crio_msv_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on crio-msv, use a find and replace
         * to change 'crio-msv' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'crio-msv', get_template_directory() . '/languages' );

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
            'primary' => __( 'Primary Menu', 'crio-msv' ),
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
        add_theme_support( 'custom-background', apply_filters( 'crio_msv_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
    }
    endif; // crio_msv_setup
    add_action( 'after_setup_theme', 'crio_msv_setup' );

    /**
     * Enqueue scripts and styles.
     */
    function crio_msv_scripts() {
        wp_enqueue_style( 'crio-msv-style', get_stylesheet_uri() );

        wp_enqueue_script( 'crio-msv-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

        wp_enqueue_script( 'crio-msv-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'crio_msv_scripts' );



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

    function projects() {
      $labels = array(
        'Title'              => _x( 'Projects', 'post type general name' ),
        'singular_name'      => _x( 'Project', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Project' ),
        'add_new_item'       => __( 'Add New Project' ),
        'edit_item'          => __( 'Edit Project' ),
        'new_item'           => __( 'New Project' ),
        'all_items'          => __( 'All Projects' ),
        'view_item'          => __( 'View Project' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Projects'
      );

      $args = array(
        'labels'         => $labels,
        'description'   => 'A list of Projects',
        'public'        => true,
        'menu_position' => 4,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories' ),
        'has_archive'   => true,

      );
        
      register_post_type( 'projects', $args ); 
    }

    add_action( 'init', 'projects' );

    // A.2.1. End --------------------------------------------------------------------------------------------------

    // A.2.2. PRESS RELEASES ---------------------------------------------------------------------------------------

    function press() {
      $labels = array(
        'Title'              => _x( 'Press Releases', 'post type general name' ),
        'singular_name'      => _x( 'Press Release', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Press Release' ),
        'add_new_item'       => __( 'Add New Press Release' ),
        'edit_item'          => __( 'Edit Press Release' ),
        'new_item'           => __( 'New Press Release' ),
        'all_items'          => __( 'All Press Releases' ),
        'view_item'          => __( 'View Press Release' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Press'
      );

      $args = array(
        'labels'         => $labels,
        'description'   => 'A list of Press Releases',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies' ),
        'has_archive'   => true,

      );
        
      register_post_type( 'press', $args );
    }

    add_action( 'init', 'press' );

    // hook into the init action and call create_book_taxonomies when it fires
    add_action( 'init', 'create_book_taxonomies', 0 );

    // create two taxonomies, genres and writers for the post type "book"
    function create_book_taxonomies() {
        // Add new taxonomy, make it hierarchical (like categories)
        $labels = array(
            'name'              => _x( 'Press Categories', 'taxonomy general name' ),
            'singular_name'     => _x( 'Press Category', 'taxonomy singular name' ),
            'search_items'      => __( 'Search Press Categories' ),
            'all_items'         => __( 'All Press Categories' ),
            'parent_item'       => __( 'Parent Press Category' ),
            'parent_item_colon' => __( 'Parent Press Category:' ),
            'edit_item'         => __( 'Edit Press Category' ),
            'update_item'       => __( 'Update Press Category' ),
            'add_new_item'      => __( 'Add New Press Category' ),
            'new_item_name'     => __( 'New Press Category Name' ),
            'menu_name'         => __( 'Press Category' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => true,
        );

        register_taxonomy( 'presscat', array( 'press' ), $args );

    }

    // A.2.2. End --------------------------------------------------------------------------------------------------


// A.2 END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.3 WIDGETS & SIDEBARS ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function crio_msv_widgets_init() {

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
add_action( 'widgets_init', 'crio_msv_widgets_init' );

// A.3 END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// END OF FILE #####################################################################################################















