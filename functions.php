<?php
function my_custom_theme_scripts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap', false );
    wp_enqueue_style( 'style', get_stylesheet_uri() ); // The main stylesheet (style.css)
    wp_enqueue_style( 'config-style', get_template_directory_uri() . '/assets/css/config.css' );
    wp_enqueue_style( 'libs-style', get_template_directory_uri() . '/assets/css/libs.css' );
    wp_enqueue_style( 'responsive-style', get_template_directory_uri() . '/assets/css/responsive.css' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'libs', get_template_directory_uri() . '/assets/js/lib/libs.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'contact-form', get_template_directory_uri() . '/assets/js/contact_form.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'st-core', get_template_directory_uri() . '/assets/js/st-core.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'classes', get_template_directory_uri() . '/assets/js/classes.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), null, true );


}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_scripts' );

function register_my_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu'),
        )
    );
}
add_action('after_setup_theme', 'register_my_menus');

class WP_lm_Nav_Walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $classes = empty( $classes ) ? array() : (array) $classes;
        $classes[] = 'sub-menu';
        $classes[] = 'in-view';
        $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', array_filter( $classes ), $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        $data_attr = ' data-delay="0" data-unload="none" data-threshold="0.5"';
        $output .= '<ul' . $class_names . $data_attr . '>';
    }

    // Start each menu item (Top level and Submenu items)
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        if ($item->current) {
            $classes[] = 'current-menu-item';
        }
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= '<li' . $id . $class_names;
        
        if ($depth == 0) {
            $delay = $depth * 75; 
            $output .= ' data-delay="' . $delay . '" data-unload="none" data-threshold="0.5"';
        }
        
        $output .= '>';

        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) . '"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="' . esc_attr( $item->xfn        ) . '"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="' . esc_attr( $item->url        ) . '"' : '';

        $title = apply_filters( 'the_title', $item->title, $item->ID );

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $args, $depth );
    }
}

function theme_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width'  => true,
        'flex-height' => true,
        'unlink_home' => true, 
    ) );
}
add_action( 'after_setup_theme', 'theme_setup' );

function lm_customize_register( $wp_customize ) {

    // Add a new section for social media settings
    $wp_customize->add_section( 'lm_social_media', array(
        'title'    => __( 'Social Media Links', 'lm' ),
        'priority' => 40, // Position in the Customizer
    ) );

    // List of available social media platforms
    $socials = array(
        'instagram'  => 'Instagram',
        'tiktok'     => 'TikTok',
        'facebook'   => 'Facebook',
        'twitter'    => 'X (Twitter)',
        'linkedin'   => 'LinkedIn',
        'youtube'    => 'YouTube',
        'vimeo'      => 'Vimeo',
        'behance'    => 'Behance',
        'dribble'    => 'Dribbble',
        'pinterest'  => 'Pinterest',
        'tumblr'     => 'Tumblr',
        'flickr'     => 'Flickr',
        'xing'       => 'Xing',
        'patreon'    => 'Patreon',
        '500px'      => '500px',
    );

    // Create settings and controls for each social media platform
    foreach ( $socials as $social => $name ) {
        // Add setting for social media URL
        $wp_customize->add_setting( "lm_social_{$social}_url", array(
            'default'   => '',
            'transport' => 'refresh',
        ) );

        // Add setting for enabling/disabling social media icon
        $wp_customize->add_setting( "lm_social_{$social}_enabled", array(
            'default'   => false,
            'transport' => 'refresh',
        ) );

        // Add control for URL
        $wp_customize->add_control( "lm_social_{$social}_url", array(
            'label'    => sprintf( __( '%s URL', 'lm' ), $name ),
            'section'  => 'lm_social_media',
            'type'     => 'url',
            'description' => sprintf( __( 'Enter the URL for your %s profile.', 'lm' ), $name ),
        ) );

        // Add control for enabling/disabling the icon
        $wp_customize->add_control( "lm_social_{$social}_enabled", array(
            'label'    => sprintf( __( 'Enable %s Icon', 'lm' ), $name ),
            'section'  => 'lm_social_media',
            'type'     => 'checkbox',
            'description' => sprintf( __( 'Check this box to display the %s icon.', 'lm' ), $name ),
        ) );
    }

}
add_action( 'customize_register', 'lm_customize_register' );

function my_theme_register_menus() {
    register_nav_menus( array(
        'new_menu_location' => __( 'Footer Menu' ),
    ) );
}
add_action( 'after_setup_theme', 'my_theme_register_menus' );

function create_carousel_post_type() {
    $args = array(
        'public' => true,
        'label'  => 'Team Members',
        'supports' => array( 'title', 'editor', 'thumbnail' ), // you can add more as needed
        'menu_icon' => 'dashicons-images-alt2', // Icon for the admin menu
    );
    register_post_type( 'team-member', $args );
}
add_action( 'init', 'create_carousel_post_type' );

function create_events_post_type() {
    $args = array(
        'public' => true,
        'label'  => 'Events',
        'supports' => array( 'title', 'date', 'description' ), // you can add more as needed
        'menu_icon' => 'dashicons-images-alt2', // Icon for the admin menu
    );
    register_post_type( 'events', $args );
}
add_action( 'init', 'create_events_post_type' );

// Register custom rewrite rule for team members
function custom_team_member_rewrite_rule() {
    add_rewrite_rule(
        '^team-member/([^/]+)/?$',
        'index.php?pagename=team-member&team_member_name=$matches[1]',
        'top'
    );
}
add_action('init', 'custom_team_member_rewrite_rule');

// Add query vars to capture the custom URL
function custom_team_member_query_vars($query_vars) {
    $query_vars[] = 'team_member_name';
    return $query_vars;
}
add_filter('query_vars', 'custom_team_member_query_vars');

function custom_articles_search_rewrite_rule() {
    if (isset($_GET['s']) && !empty($_GET['s'])) {
        add_rewrite_rule(
            '^articles/?$', // Match the /articles base path
            'index.php?s=' . sanitize_text_field($_GET['s']), // Safely pass the search query `s`
            'top'
        );
    }
}
add_action('init', 'custom_articles_search_rewrite_rule');


function modify_search_query($query) {
    if ($query->is_search && !is_admin() && $query->get('s')) {
        // Ensure the search is limited to the 'articles' post type
        $query->set('post_type', 'article'); // Change 'article' to your custom post type slug
    }
}
add_filter('pre_get_posts', 'modify_search_query');


add_theme_support( 'post-thumbnails' );

