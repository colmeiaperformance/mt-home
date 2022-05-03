<?php 

//Stylesheets
function loading_styles(){
    wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/vendor/swiper-js/swiper-bundle.min.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_style( 'source-sans-pro-font', 'https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap', array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_style( 'map-css', get_template_directory_uri() . '/vendor/jqvmap/jqvmap.min.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_style( 'style-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_style( 'icons-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
}


//Scripts
function loading_scripts(){
    wp_register_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array( 'jquery-core' ), wp_get_theme()->get( 'Version' ), true  );
    wp_register_script( 'swiper-js', get_template_directory_uri() . '/vendor/swiper-js/swiper-bundle.min.js', array( 'jquery-core' ), wp_get_theme()->get( 'Version' ), true  );
    wp_register_script( 'jquery-touchSwipe-js', get_template_directory_uri() . '/js/jquery.touchSwipe.min.js', array( 'jquery-core' ), wp_get_theme()->get( 'Version' ), true  );
    wp_register_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery-core' ), wp_get_theme()->get( 'Version' ), true  );
    
    wp_enqueue_script( 'bootstrap-js');
    wp_enqueue_script( 'swiper-js');
    wp_enqueue_script( 'jquery-touchSwipe-js');
    wp_enqueue_script( 'main-js');
}

add_action( 'wp_enqueue_scripts', 'loading_styles' );
add_action( 'wp_enqueue_scripts', 'loading_scripts' );



/* Add native pagination.  */
function wp_boostrap_4_pagination(){
    
    if( is_singular() )
    return;
    
    global $wp_query;
    
    /** Check number of pages **/
    if( $wp_query->max_num_pages <= 1 )
    return;
    
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
    
    /** Add current page to the array */
    if ( $paged >= 1 )
    $links[] = $paged;
    
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    
    echo '<div class="pagination-container"><ul class="pagination justify-content-left">' . "\n";
    
    /** Previous Post Link */
    if ( get_previous_posts_link() )
    printf( '<li class="page-item">%s</li>' . "\n", get_previous_posts_link() );
    
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="page-item active"' : ' class="page-item"';
        
        printf( '<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
        
        if ( ! in_array( 2, $links ) )
        echo '<li class="page-empty">…</li>';
    }
    
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="page-item active"' : ' class="page-item"';
        printf( '<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
    
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
        echo '<li class="page-empty">…</li>' . "\n";
        
        $class = $paged == $max ? ' class="page-item active"' : ' class="page-item"';
        printf( '<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
    
    /** Next Post Link */
    if ( get_next_posts_link() )
    printf( '<li class="page-item">%s</li>' . "\n", get_next_posts_link() );
    
    echo '</ul></div>' . "\n";
    
}


/*
* Custom Attribute for links
*/

add_filter('next_posts_link_attributes', 'wp_boostrap_4_pagination_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'wp_boostrap_4_pagination_posts_link_attributes');

function wp_boostrap_4_pagination_posts_link_attributes() {
    return 'class="page-link"';
}

function base_setup() {
    
    //Tradução
    //load_theme_textdomain( 'base_language', get_template_directory() . '/languages' );
    
    //Wordpress gerencia o título
    add_theme_support( 'title-tag' );
    
    //Formatos de posts
    add_theme_support(
        'post-formats',
        array(
            'aside',
            'gallery',
            'image',
            'video',
            )
        );
        
        // bootstrap 5 wp_nav_menu walker
        class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
        {
            private $current_item;
            private $dropdown_menu_alignment_values = [
                'dropdown-menu-start',
                'dropdown-menu-end',
                'dropdown-menu-sm-start',
                'dropdown-menu-sm-end',
                'dropdown-menu-md-start',
                'dropdown-menu-md-end',
                'dropdown-menu-lg-start',
                'dropdown-menu-lg-end',
                'dropdown-menu-xl-start',
                'dropdown-menu-xl-end',
                'dropdown-menu-xxl-start',
                'dropdown-menu-xxl-end'
            ];
            
            function start_lvl(&$output, $depth = 0, $args = null)
            {
                $dropdown_menu_class[] = '';
                foreach($this->current_item->classes as $class) {
                    if(in_array($class, $this->dropdown_menu_alignment_values)) {
                        $dropdown_menu_class[] = $class;
                    }
                }
                $indent = str_repeat("\t", $depth);
                $submenu = ($depth > 0) ? ' sub-menu' : '';
                $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
            }
            
            function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
            {
                $this->current_item = $item;
                
                $indent = ($depth) ? str_repeat("\t", $depth) : '';
                
                $li_attributes = '';
                $class_names = $value = '';
                
                $classes = empty($item->classes) ? array() : (array) $item->classes;
                
                $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
                $classes[] = 'nav-item';
                $classes[] = 'nav-item-' . $item->ID;
                if ($depth && $args->walker->has_children) {
                    $classes[] = 'dropdown-menu dropdown-menu-end';
                }
                
                $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
                $class_names = ' class="' . esc_attr($class_names) . '"';
                
                $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
                $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';
                
                $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';
                
                $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
                $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
                $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
                $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
                
                $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
                $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
                $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';
                
                $item_output = $args->before;
                $item_output .= '<a' . $attributes . '>';
                $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
                $item_output .= '</a>';
                $item_output .= $args->after;
                
                $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
            }
        }
        // register a new menu
        register_nav_menu('main-menu', 'Main menu');
        register_nav_menu('secondary-menu', 'Secondary menu');
        register_nav_menu('footer-menu-1', 'Footer menu 1');
        register_nav_menu('footer-menu-2', 'Footer menu 2');
        
        //Thumbnails ou miniaturas
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1920, 9999 );
        
        //Logo customizado
        $logo_width  = 300;
        $logo_height = 100;
        
        add_theme_support(
            'custom-logo',
            array(
                'height'               => $logo_height,
                'width'                => $logo_width,
                'flex-width'           => true,
                'flex-height'          => true,
                'unlink-homepage-logo' => true,
                )
            );
            
            // Add support for full and wide align images
            add_theme_support( 'align-wide' );
            
        }
        
        
        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );
        
        // Add support for custom line height controls.
        add_theme_support( 'custom-line-height' );
        
        // Add support for experimental link color control.
        add_theme_support( 'experimental-link-color' );
        
        // Add support for experimental cover block spacing.
        add_theme_support( 'custom-spacing' );
        
        add_action( 'after_setup_theme', 'base_setup' );
        
        // Allow SVG
        // add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
            
            //   global $wp_version;
            //   if ( $wp_version !== '4.7.1' ) {
                //      return $data;
                //   }
                
                //   $filetype = wp_check_filetype( $filename, $mimes );
                
                //   return [
                    //       'ext'             => $filetype['ext'],
                    //       'type'            => $filetype['type'],
                    //       'proper_filename' => $data['proper_filename']
                    //   ];
                    
                    // }, 10, 4 );
                    
                    // function cc_mime_types( $mimes ){
                        //   $mimes['svg'] = 'image/svg+xml';
                        //   return $mimes;
                        // }
                        // add_filter( 'upload_mimes', 'my_custom_mime_types' );
                        
                        function fix_svg() {
                            echo '<style type="text/css">
                            .attachment-266x266, .thumbnail img {
                                width: 100% !important;
                                height: auto !important;
                            }
                            </style>';
                        }
                        add_action( 'admin_head', 'fix_svg' );
                        
                        /* Creating option pages on ACF plugin */
                        add_action('acf/init', 'my_acf_op_init');
                        function my_acf_op_init() {
                            
                            // Check function exists.
                            if( function_exists('acf_add_options_page') ) {
                                
                                // Add parent.
                                $parent = acf_add_options_page(array(
                                    'page_title'  => __('Theme General Settings'),
                                    'menu_title'  => __('Theme Settings'),
                                    'icon_url'    => 'dashicons-welcome-write-blog',
                                    'position'    => 60,
                                    'redirect'    => false,
                                ));
                                
                                // Add sub page.
                                $child = acf_add_options_page(array(
                                    'page_title'  => __('Logo Settings'),
                                    'menu_title'  => __('Logo'),
                                    'parent_slug' => $parent['menu_slug'],
                                ));
                                
                                // Add sub page.
                                $child = acf_add_options_page(array(
                                    'page_title'  => __('Social Settings'),
                                    'menu_title'  => __('Social Media'),
                                    'parent_slug' => $parent['menu_slug'],
                                ));
                                
                                // Add sub page.
                                $child = acf_add_options_page(array(
                                    'page_title'  => __('Footer Settings'),
                                    'menu_title'  => __('Footer'),
                                    'parent_slug' => $parent['menu_slug'],
                                ));
                                
                                
                            }
                        }
                        
                        /* Removing WP editor */
                        // add_action('init', 'remove_guttenberg_from_pages', 10);
                        // function remove_guttenberg_from_pages()
                        // {
                            //     remove_post_type_support('page', 'editor');
                            // }
                            
                            function the_breadcrumb() {
                                echo '<nav aria-label="breadcrumb"><ol class="breadcrumb">';
                                if (!is_home()) {
                                    echo '<li class="breadcrumb-item"><a href="';
                                    echo get_option('home');
                                    echo '">';
                                    echo 'Home';
                                    echo "</a></li>";
                                    if (is_category() || is_single()) {
                                        echo '<li class="breadcrumb-item">';
                                        the_category(' </li><li class="breadcrumb-item"> ');
                                        if (is_single()) {
                                            echo "</li><li class='breadcrumb-item active'>";
                                            the_title();
                                            echo '</li>';
                                        }
                                    } elseif (is_page()) {
                                        echo '<li class="breadcrumb-item">';
                                        echo the_title();
                                        echo '</li>';
                                    }
                                }
                                elseif (is_tag()) {single_tag_title();}
                                elseif (is_day()) {echo"<li class='breadcrumb-item'>Archive for "; the_time('F jS, Y'); echo'</li>';}
                                elseif (is_month()) {echo"<li class='breadcrumb-item'>Archive for "; the_time('F, Y'); echo'</li>';}
                                elseif (is_year()) {echo"<li class='breadcrumb-item'>Archive for "; the_time('Y'); echo'</li>';}
                                elseif (is_author()) {echo"<li class='breadcrumb-item'>Author Archive"; echo'</li>';}
                                elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
                                elseif (is_search()) {echo"<li class='breadcrumb-item'>Search Results"; echo'</li>';}
                                echo '</ol></nav>';
                            }
                            
                            //Excerpt size
                            function mytheme_custom_excerpt_length( $length ) {
                                return 35;
                            }
                            add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );
                            
                            wp_localize_script( 'twentyfifteen-script', 'ajax_posts', array(
                                'ajaxurl' => admin_url( 'admin-ajax.php' ),
                                'noposts' => __('No older posts found', 'twentyfifteen'),
                            ));