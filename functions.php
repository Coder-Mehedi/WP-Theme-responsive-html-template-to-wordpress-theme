<?php 
require_once 'custom_post_type.php';
// require_once 'meta_boxes.php';
require_once 'enqueue.php';
// add_filter('use_block_editor_for_post', '__return_false', 10);


if ( ! function_exists( 'dorothy_setup' ) ) :

	function dorothy_setup() {
		
		load_theme_textdomain( 'dorothy', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'post-formats', array( 'aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video', 'audio' ) );


		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'dorothy' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'dorothy_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		
		add_theme_support( 'custom-logo', array(
			'height'      => 80,
			'width'       => 280,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'dorothy_setup' );


function dorothy_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'dorothy' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'dorothy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dorothy_widgets_init' );


function hook_css() {
	$item = new WP_Query(['post_type' => 'banner', 'posts_per_page' => 1]);
    if ( $item->have_posts()):
        while ($item->have_posts()) : $item->the_post();
    ?>
        <style>
            .top-banner {
            <?php if(get_field('banner_image')): ?>
            	<?php $image = get_field('banner_image'); ?>
	        	background: url(<?php echo $image['url']; ?>);
	       	<?php endif; ?>
	       <?php endwhile;endif; ?>
	        	background-repeat: no-repeat;
			  background-size: 100% 100%;
			  min-height: 100vh;
			}

			section.meet-the-author {
			  background: url(<?php echo get_template_directory_uri(); ?>/assets/images/right-absolute-image.png);
			  background-repeat: no-repeat;
			  background-position: 100% 9%;
			}
			
        </style>
    <?php
}
add_action('wp_head', 'hook_css');