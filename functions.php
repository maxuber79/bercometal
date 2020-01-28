<?php
/**
 * bercometal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bercometal
 */

if ( ! function_exists( 'bercometal_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bercometal_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bercometal, use a find and replace
		 * to change 'bercometal' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bercometal', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 825, 510, true );
		add_image_size('banner-img', 1920, 600, true);
		add_image_size( 'banner-page', 1920, 260, true);
		add_image_size('thumbnail-news', 580, 250, true);
		add_image_size('thumb-home', 350, 205, true);
		add_image_size ('thumb-sidebar', 64, 64, true);
		add_image_size( 'thumb-gallery', 800, 600, true );
		//add_image_size('mytheme-logo', 200, auto, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
		'menu_principal' => __( 'Menu header','bercometal' ),
		'menu_mobile'  => __( 'Menu mobile', 'bercometal' ),
		'menu_interior' => __('Menu paginas', 'bercometal'),
		) );

		// Register Custom Navigation Walker
		require_once get_template_directory() . '/template-parts/navbar_walker.php';

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bercometal_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
 			'width'       => 200,
			'flex-width'  => true,
			'flex-height' => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'bercometal_setup' );

/**
* Changes the class on the custom logo in the header.php
* add_filter('get_custom_logo', 'change_custom_logo_output', 10);
*/
function change_custom_logo_output( $html ) {
	//$html = str_replace('custom-logo-link', 'scrollto', $html );
	$custom_logo_id = get_theme_mod( 'custom_logo' );
    $html = sprintf( '<a href="#intro" class="scrollto" rel="home" itemprop="url">%2$s</a>',
            esc_url( 'www.somewhere.com' ),
            wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'logo-img',
            ) )
    );
	return $html;
}
add_filter('get_custom_logo', 'change_custom_logo_output', 10);
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bercometal_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bercometal_content_width', 640 );
}
add_action( 'after_setup_theme', 'bercometal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bercometal_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bercometal' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bercometal' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar(
			array(
			'name'=> 'widget footer 1',
			'id' => 'widget_footer_left',
			'description' => 'Zona widget footer left',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
			'before_widget' =>'',
			'after_widget' => ''		 
	  	));
	  
	register_sidebar(
			array(
			'name'=>'widget footer 2',
			'id' => 'widget_footer_center_left',
			'description' => 'Zona widget footer center-left',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
			'before_widget' =>'',
			'after_widget' => ''		 
  		));
	register_sidebar(
			array(
			'name'=>'widget footer 3',
			'id' => 'widget_footer_center_right',
			'description' => 'Zona widget footer center-right',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
			'before_widget' =>'',
			'after_widget' => ''		 
		  ));
		  
	register_sidebar(
			array(
			'name'=>'widget footer 4',
			'id' => 'widget_footer_right',
			'description' => 'Zona widget footer right',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
			'before_widget' =>'',
			'after_widget' => ''		 
		  ));
	register_sidebar( array(
		'name'          => __( 'Widget Page', 'bercometal' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'bercometal' ),
		'before_widget' => '<div class="single-sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="popular-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'bercometal_widgets_init' );

/**
 * Enqueue styles.
 * @since Bercometal 1.0
 */
function bercometal_styles() {
	wp_enqueue_style( 'bercometal-style', get_stylesheet_uri() );

	/* css bootstrap 4 */
	wp_register_style('bootstrap 4.3.1', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', NULL, '4.3.1', 'all');
	wp_enqueue_style('bootstrap 4.3.1');
	
	wp_register_style( 'bootstrap-toggle','https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css', NULL, '2.2.2', 'all' );
	wp_enqueue_style(  'bootstrap-toggle' );
		
	/* custom styles */
	wp_register_style('custom-landing', get_template_directory_uri() . '/css/custom_style_project.css', NULL, '1.0', 'all');
	wp_enqueue_style('custom-landing');
	
	/* fontawesome */
	wp_register_style('fontawesome 4', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', NULL, '4.7.0', 'all');
	wp_enqueue_style('fontawesome 4');
	
	/* themify-icons */
	wp_register_style('themify-icons', get_template_directory_uri() . '/library/themify-icons/themify-icons.css', NULL, '4.7.0', 'all');
	wp_enqueue_style('themify-icons');
	
	wp_register_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' , NULL, '1.0', 'all');
	wp_enqueue_style('animate-css');

	wp_register_style('ionicons', get_template_directory_uri() . '/library/ionicons/css/ionicons.min.css' , NULL, '1.0', 'all');
	wp_enqueue_style('ionicons');

	wp_register_style('owlcarousel', get_template_directory_uri() . '/library/owlcarousel/assets/owl.carousel.min.css' , NULL, '1.0', 'all');
	wp_enqueue_style('owlcarousel');

	wp_register_style('lightbox', get_template_directory_uri() . '/library/lightbox/css/lightbox.min.css' , NULL, '1.0', 'all');
	wp_enqueue_style('lightbox');
}
add_action('wp_enqueue_scripts', 'bercometal_styles');

/**
 * Enqueue scripts and styles.
 * @since bercometal 1.0
 */
function bercometal_scripts() {	

	wp_register_script('jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', NULL, '3.3.1', TRUE);
	wp_enqueue_script('jQuery');

	/* wp_register_script('migrate', get_template_directory_uri() . '/library/jquery/jquery-migrate.min.js', NULL, '1.0', TRUE);
	wp_enqueue_script('migrate'); */

	wp_register_script('migrate','https://code.jquery.com/jquery-migrate-1.4.1.js', NULL, '1.0', TRUE);
	wp_enqueue_script('migrate');

	/* js bootstrap 4 */
	wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', NULL, '1.14.7', TRUE);
    wp_enqueue_script('popper');
	
	/* js bootstrap 4 */
	wp_register_script('bootstrap-js 4.3.1', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', NULL, '4.3.1', TRUE);
	wp_enqueue_script('bootstrap-js 4.3.1');
	
	wp_register_script('bootstrap-toggle', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js', NULL, '2.2.2', TRUE);
	wp_enqueue_script('bootstrap-toggle');

	wp_register_script('bundle', get_template_directory_uri() . '/library/bootstrap/js/bootstrap.bundle.min.js', NULL, '1.0', TRUE);
	wp_enqueue_script('bundle');

	wp_register_script('easing', get_template_directory_uri() . '/library/easing/easing.min.js', NULL, '1.0', TRUE);
	wp_enqueue_script('easing');

	wp_register_script('superfish', get_template_directory_uri() . '/library/superfish/superfish.min.js', NULL, '1.0', TRUE);
	wp_enqueue_script('superfish');

	wp_register_script('counterup', get_template_directory_uri() . '/library/counterup/counterup.min.js', NULL, '1.0', TRUE);
	wp_enqueue_script('counterup');

	wp_register_script('wow', get_template_directory_uri() . '/library/wow/wow.min.js', NULL, '1.0', TRUE);
	wp_enqueue_script('wow');

	wp_register_script('owl', get_template_directory_uri() . '/library/owlcarousel/owl.carousel.min.js', NULL, '1.0', TRUE);
	wp_enqueue_script('owl');
	
	wp_register_script('touchSwipe', get_template_directory_uri() . '/library/touchSwipe/jquery.touchSwipe.min.js', NULL, '1.0', TRUE);
	wp_enqueue_script('touchSwipe');
	
	wp_register_script('hoverIntent', get_template_directory_uri() . '/library/superfish/hoverIntent.js', NULL, '1.0', TRUE);
	wp_enqueue_script('hoverIntent');
	
	wp_register_script('isotope', get_template_directory_uri() . '/library/isotope/isotope.pkgd.min.js', NULL, '1.0', TRUE);
	wp_enqueue_script('isotope');

	wp_register_script('lightbox', get_template_directory_uri() . '/library/lightbox/js/lightbox.min.js', NULL, '1.0', TRUE);
	wp_enqueue_script('lightbox');
	
	// wp_enqueue_script( 'bercometal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_register_script('main-js', get_template_directory_uri() . '/js/main.js', NULL,'1.0',TRUE);
	wp_enqueue_script('main-js');

	// wp_enqueue_script( 'bercometal-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );


	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'bercometal_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/********************************** control de textos en excerpt y content */

/******* EXCERPT*/
function excerpt($limit) {
 $excerpt = explode(' ', get_the_excerpt(), $limit);
 if (count($excerpt)>=$limit) {
 array_pop($excerpt);
 $excerpt = implode(" ",$excerpt).' &#91;...&#93;';
 } else {
 $excerpt = implode(" ",$excerpt);
 } 
 $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
 return $excerpt;
}
/******* CONTENT*/
function content($limit) {
 $content = explode(' ', get_the_content(), $limit);
 if (count($content)>=$limit) {
 array_pop($content);
 $content = implode(" ",$content).' &#91;...&#93;';
 } else {
 $content = implode(" ",$content);
 } 
 $content = preg_replace('/\[.+\]/','', $content);
 $content = apply_filters('the_content', $content); 
 $content = str_replace(']]>', ']]&gt;', $content);
 return $content;
}
/***************** COMO USARLO
<?php echo excerpt('10'); ?>

<?php echo content('25'); ?>

/********************************/

/**
 * Paginacion Numerica
 * @since bercometal 1.0
 */
function paginado() {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
 
    $pagination = array(
        'base' => @add_query_arg('page','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'show_all' => true,
        'type' => 'list',
        'next_text' => 'Siguiente &rarr;',
        'prev_text' => '&larr; Anterior'
        );
 
    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
 
    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
 
    echo paginate_links( $pagination );
}

/**
 * Modificacion url custom logo
 * @since bercometal 1.0
 */
function dpw_custom_logo() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
    $html = sprintf( '<a href="%1$s" class="scrollto custom-logo-link" rel="home" itemprop="url">%2$s</a>',
	esc_url( home_url('/') ),
	wp_get_attachment_image( $custom_logo_id, 'full', false, array(
		'class'    => 'custom-logo logo-img',
		) )
	);
    return $html;  
}
add_filter( 'get_custom_logo', 'dpw_custom_logo' );

/**
 * Segundo logo en paginas interiores
 * @since Bercometal
 */
function brandpage_header() { ?>
	<!-- Logo -->
	<a class="link-brandpage" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Front">
		<span class="center-brandpage">
			<img class="brandpage" src="<?php echo get_template_directory_uri();?>/images/logoSlogan.png" alt="Bercometal">
		</span>
	</a>
	<!-- End Logo -->
<?php }
add_action( 'start_header_logo', 'brandpage_header');

/**
 * @aplicación de function
 * <?php do_action('start_header_logo'); ?>
 * 
 */