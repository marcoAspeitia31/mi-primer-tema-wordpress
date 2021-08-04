<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package devitm-theme
 * @since DevITM 1.0.0
 */

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1400;

if ( ! function_exists('devitm_theme_setup') ){

    /**
     * Register Theme Features
     * 
     * @since DevITM 1.0.0
     */
    function devitm_theme_setup(){
        // Add theme support for Automatic Feed Links
        add_theme_support( 'automatic-feed-links' );

        // Add theme support for Featured Images
        add_theme_support( 'post-thumbnails' );

        // Add theme support for document Title tag
        add_theme_support( 'title-tag' );

        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );

        //Restoring the classic Widgets Editor (Optional)
        remove_theme_support( 'widgets-block-editor' );

        /**
         * Add post-formats support.
         */
        add_theme_support(
            'post-formats',
            array(
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );

        /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );

        $editor_stylesheet_path = './assets/css/style-editor.css';

        // Note, the is_IE global variable is defined by WordPress and is used
        // to detect if the current browser is internet explorer.
        global $is_IE;
        if ( $is_IE ) {
            $editor_stylesheet_path = './assets/css/ie-editor.css';
        }

        // Enqueue editor styles.
        add_editor_style( $editor_stylesheet_path );

        // Add custom editor font sizes.
        add_theme_support(
            'editor-font-sizes',
            array(
                array(
                    'name'      => esc_html__( 'Extra small', 'devitm-theme' ),
                    'shortName' => esc_html_x( 'XS', 'Font size', 'devitm-theme' ),
                    'size'      => 16,
                    'slug'      => 'extra-small',
                ),
                array(
                    'name'      => esc_html__( 'Small', 'devitm-theme' ),
                    'shortName' => esc_html_x( 'S', 'Font size', 'devitm-theme' ),
                    'size'      => 18,
                    'slug'      => 'small',
                ),
                array(
                    'name'      => esc_html__( 'Normal', 'devitm-theme' ),
                    'shortName' => esc_html_x( 'M', 'Font size', 'devitm-theme' ),
                    'size'      => 20,
                    'slug'      => 'normal',
                ),
                array(
                    'name'      => esc_html__( 'Large', 'devitm-theme' ),
                    'shortName' => esc_html_x( 'L', 'Font size', 'devitm-theme' ),
                    'size'      => 24,
                    'slug'      => 'large',
                ),
                array(
                    'name'      => esc_html__( 'Extra large', 'devitm-theme' ),
                    'shortName' => esc_html_x( 'XL', 'Font size', 'devitm-theme' ),
                    'size'      => 40,
                    'slug'      => 'extra-large',
                ),
                array(
                    'name'      => esc_html__( 'Huge', 'devitm-theme' ),
                    'shortName' => esc_html_x( 'XXL', 'Font size', 'devitm-theme' ),
                    'size'      => 96,
                    'slug'      => 'huge',
                ),
                array(
                    'name'      => esc_html__( 'Gigantic', 'devitm-theme' ),
                    'shortName' => esc_html_x( 'XXXL', 'Font size', 'devitm-theme' ),
                    'size'      => 144,
                    'slug'      => 'gigantic',
                ),
            )
        );

        // Custom background color.
        add_theme_support(
            'custom-background',
            array(
                'default-color' => 'd1e4dd',
            )
        );

        // Editor color palette.
        $black     = '#000000';
        $dark_gray = '#28303D';
        $gray      = '#39414D';
        $green     = '#D1E4DD';
        $blue      = '#D1DFE4';
        $purple    = '#D1D1E4';
        $red       = '#E4D1D1';
        $orange    = '#E4DAD1';
        $yellow    = '#EEEADD';
        $white     = '#FFFFFF';

        add_theme_support(
            'editor-color-palette',
            array(
                array(
                    'name'  => esc_html__( 'Black', 'devitm-theme' ),
                    'slug'  => 'black',
                    'color' => $black,
                ),
                array(
                    'name'  => esc_html__( 'Dark gray', 'devitm-theme' ),
                    'slug'  => 'dark-gray',
                    'color' => $dark_gray,
                ),
                array(
                    'name'  => esc_html__( 'Gray', 'devitm-theme' ),
                    'slug'  => 'gray',
                    'color' => $gray,
                ),
                array(
                    'name'  => esc_html__( 'Green', 'devitm-theme' ),
                    'slug'  => 'green',
                    'color' => $green,
                ),
                array(
                    'name'  => esc_html__( 'Blue', 'devitm-theme' ),
                    'slug'  => 'blue',
                    'color' => $blue,
                ),
                array(
                    'name'  => esc_html__( 'Purple', 'devitm-theme' ),
                    'slug'  => 'purple',
                    'color' => $purple,
                ),
                array(
                    'name'  => esc_html__( 'Red', 'devitm-theme' ),
                    'slug'  => 'red',
                    'color' => $red,
                ),
                array(
                    'name'  => esc_html__( 'Orange', 'devitm-theme' ),
                    'slug'  => 'orange',
                    'color' => $orange,
                ),
                array(
                    'name'  => esc_html__( 'Yellow', 'devitm-theme' ),
                    'slug'  => 'yellow',
                    'color' => $yellow,
                ),
                array(
                    'name'  => esc_html__( 'White', 'devitm-theme' ),
                    'slug'  => 'white',
                    'color' => $white,
                ),
            )
        );

        add_theme_support(
            'editor-gradient-presets',
            array(
                array(
                    'name'     => esc_html__( 'Purple to yellow', 'devitm-theme' ),
                    'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
                    'slug'     => 'purple-to-yellow',
                ),
                array(
                    'name'     => esc_html__( 'Yellow to purple', 'devitm-theme' ),
                    'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
                    'slug'     => 'yellow-to-purple',
                ),
                array(
                    'name'     => esc_html__( 'Green to yellow', 'devitm-theme' ),
                    'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
                    'slug'     => 'green-to-yellow',
                ),
                array(
                    'name'     => esc_html__( 'Yellow to green', 'devitm-theme' ),
                    'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
                    'slug'     => 'yellow-to-green',
                ),
                array(
                    'name'     => esc_html__( 'Red to yellow', 'devitm-theme' ),
                    'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
                    'slug'     => 'red-to-yellow',
                ),
                array(
                    'name'     => esc_html__( 'Yellow to red', 'devitm-theme' ),
                    'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
                    'slug'     => 'yellow-to-red',
                ),
                array(
                    'name'     => esc_html__( 'Purple to red', 'devitm-theme' ),
                    'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
                    'slug'     => 'purple-to-red',
                ),
                array(
                    'name'     => esc_html__( 'Red to purple', 'devitm-theme' ),
                    'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
                    'slug'     => 'red-to-purple',
                ),
            )
        );
    }
    add_action( 'after_setup_theme', 'devitm_theme_setup' );
}

/**
 * Register and Enqueue Styles
 * 
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 * 
 * @since DevITM 1.0.0
 */
if ( ! function_exists('devitm_theme_register_styles') ){
    function devitm_theme_register_styles(){
        $theme_version = wp_get_theme()->get('Version');
        
        //fonts

        //libraries or frameworks

        //Main theme style
        wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), $theme_version );

    }
    add_action( 'wp_enqueue_scripts', 'devitm_theme_register_styles' );
}

/**
 * Register and Enqueue Scripts
 * 
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 * 
 * @since DevITM 1.0.0
 */
if ( ! function_exists('devitm_theme_register_scripts') ){
    function devitm_theme_register_scripts(){
        $theme_version = wp_get_theme()->get('Version');

        if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }

        //libraries or frameworks


        //Main theme style
        wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), $theme_version, true );
    }
    add_action( 'wp_enqueue_scripts', 'devitm_theme_register_scripts' );
}

/**
 * Register Navigation Menus
 * 
 * @link https://developer.wordpress.org/reference/functions/register_nav_menu/
 * 
 * @since DevITM 1.0.0
 */
if ( ! function_exists('devitm_theme_register_navigation_menus') ) {
    
    //Register Navigation Menus
    function devitm_theme_register_navigation_menus() {
        
        $locations = array(
            'primary'   => __('Menú principal', 'devitm-theme'),
            'footer'   => __('Menú inferior', 'devitm-theme'),
        );
        register_nav_menus( $locations );

    }
    add_action( 'init', 'devitm_theme_register_navigation_menus'  );
}

/**
 * Register Sidebar
 * 
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 * 
 * @since DevITM 1.0.0 
 */

if ( ! function_exists('devitm_theme_register_sidebars') ){
    
    //Register Sidebar
    function devitm_theme_register_sidebars(){
        
        $args = array(
            'name'          => __( 'Main Sidebar', 'devitm-theme' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        );
        register_sidebar( $args );    

    }
    add_action( 'widgets_init', 'devitm_theme_register_sidebars' );
}
/**
 * Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor
 * 
 * @link https://developer.wordpress.org/block-editor/how-to-guides/widgets/opting-out/
 * 
 * (Optional)
 */
//add_filter( 'use_widgets_block_editor', '__return_false' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 * 
 * @link https://developer.wordpress.org/reference/hooks/excerpt_length/
 */
function devitm_theme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'devitm_theme_custom_excerpt_length', 999 );

/**
 * Register post types
 */