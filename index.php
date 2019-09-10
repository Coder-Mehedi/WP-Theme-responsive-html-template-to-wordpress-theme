<?php get_header() ?>
<body>
    <section class="top-banner">
        <div class="container">
<?php $item = new WP_Query(['post_type' => 'banner', 'posts_per_page' => 1]);
    if ( $item->have_posts()):
        while ($item->have_posts()) : $item->the_post(); ?>

        <?php if(get_field('first_half_title')): ?>
            <h1><?php the_field('first_half_title'); ?><br>
        <?php endif; ?>

        <?php if(get_field('second_half_title')): ?>
            <span><?php the_field('second_half_title'); ?></span></h1>
        <?php endif; ?>

        <?php if(get_field('description')): ?>
            <p class="description">"<?php the_field('description'); ?>"</p>
        <?php endif; ?>

        <?php if(get_field('publisher')): ?>
            <p class="times">- <?php the_field('publisher') ?></p>
        <?php endif; ?>

<?php endwhile;endif; ?>
        </div>
    </section>
    <section class="logo-menu">
        <div class="container">
            <div class="logo">
                <?php if ( function_exists( 'the_custom_logo' ) ) {
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            
                    } ?>
                <a href="<?php bloginfo( 'url' ) ?>"><img src="<?php echo $logo[0]; ?>" alt=""></a>
            </div>
            <nav class="menu">
                <?php wp_nav_menu(); ?>
            </nav>
        </div>
    </section>

    <section class="meet-the-author">
        <div class="container flex">
            <div class="author-image">
    <?php $item = new WP_Query(['post_type' => 'about_author', 'posts_per_page' => 1]);
    if ( $item->have_posts()):
        while ($item->have_posts()) : $item->the_post(); ?>
                <?php $image = get_field('author_image') ?>
                <img src="<?php echo $image; ?>" alt="Author">
            </div>
            <div class="author-details">

        <?php if(get_field('main_title')): ?>
        <?php $first_letter = substr(get_field('main_title'), 0,1) ?>
        <?php $the_rest = substr(get_field('main_title'), 1) ?>

                <h2><span class="first"><?php echo $first_letter; ?></span><?php echo $the_rest; ?></h2>
                <?php endif; ?>

            <?php if(get_field('details_about_author')): ?>
                <?php the_field('details_about_author'); ?>
            <?php endif; ?>

            <?php if(get_field('action_button_text')): ?>
                <a href="<?php get_field('action_button_link') ? the_field('action_button_link') : '' ; ?>"><?php the_field('action_button_text'); ?></a>
            <?php endif; ?>

            <?php endwhile;endif; ?>
            </div>
        </div>
    </section>
    <section class="fictions">
        <div class="container">
            <div class="section-heading">
                <?php $query = new WP_Query( array('post_type' => 'fictions','category_name' => 'fiction-heading')); ?>
                <?php 
                    if ( $query->have_posts()):
        while ($query->have_posts()) : $query->the_post(); ?>
                <h2><?php echo get_the_title(); ?></h2>
            <?php endwhile;endif; ?>

                <img src="<?php echo get_template_directory_uri() ?>/assets/images/heading-bottom-shape.jpg" alt="">
            </div>
    <?php $item = new WP_Query(['post_type' => 'fictions', 'posts_per_page' => 8, 'order' => 'ASC']); ?>

                <div class="flex-container">
        <?php  if ( $item->have_posts()):
        while ($item->have_posts()) : $item->the_post(); ?>
                    <div class="box-and-link">
                        <div class="book">
                            <img src="<?php get_field('book_cover_image') ? the_field('book_cover_image'): ''; ?>">
                        </div>
                        <?php $icon = get_field('set_link_icon'); ?>
                        <div class="link">
                            <a href="<?php get_field('book_detail_url') ? the_field('book_detail_url'): ''; ?>">read excerpt <i class="<?php echo $icon ??'fas fa-play-circle'; ?>"></i></a>
                        </div>
                    </div>
                    <?php endwhile;endif; ?>
                </div>

        </div>

    </section>
    <section class="action-btn">
    <?php $item = new WP_Query(['post_type' => 'fiction_action', 'posts_per_page' => 1, 'order' => 'ASC']);
    if ( $item->have_posts()):
        while ($item->have_posts()) : $item->the_post(); ?>
        <a href="<?php get_field('action_url') ? the_field('action_url') : ''; ?>">Visit me on Amazon <span>&reg;</span> <i class="fas fa-angle-double-right"></i></a>
    <?php endwhile;endif; ?>
    </section>

    <section class="what-other-say">
        <div class="container">
            <div class="heading">
                <h2>What Others Say</h2>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/heading-bottom-shape.png" alt="Shape">
            </div>

            <div id="testimonials" class="owl-carousel">
    <?php $item = new WP_Query(['post_type' => 'testimonials', 'posts_per_page' => 9, 'order' => 'ASC']);
    if ( $item->have_posts()):
        while ($item->have_posts()) : $item->the_post(); ?>

                <div class="box">
                    <div class="level-item">
                        <div class="heading">
                            <img class="avatar" src="<?php echo get_template_directory_uri() ?>/assets/images/quote.png">
                        </div>

                        <div class="content">
                            <p><?php get_field('says_what') ? the_field('says_what') : ''; ?></p>
                            <h5><?php get_field('who_says') ? the_field('who_says'): ''; ?></h5>
                        </div>
                    </div>
                </div>
        <?php endwhile;endif; ?>

            </div>
        </div>
        <!-- div class="slider_nav">
            <i class="fas fa-arrow-left"></i>
            <i class="fas fa-arrow-right"></i>
        </div -->
    </section>

<?php get_footer() ?>