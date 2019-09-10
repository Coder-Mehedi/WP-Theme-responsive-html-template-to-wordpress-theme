<footer>
        <div class="container">
            <div class="content">
                <div class="social-icons">
    <?php $item = new WP_Query(['post_type' => 'footer_settings', 'posts_per_page' => 1, 'order' => 'ASC']);
    if ( $item->have_posts()):
        while ($item->have_posts()) : $item->the_post(); ?>
                    <a href="<?php get_field('facebook_url') ? the_field('facebook_url') : ''; ?>"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php get_field('twitter_url') ? the_field('twitter_url') : ''; ?>"><i class="fab fa-twitter"></i></a>
                    <a href="<?php get_field('linkedin_url') ? the_field('linkedin_url') : ''; ?>"><i class="fab fa-linkedin-in"></i></a>
        <?php endwhile;endif; ?>
                </div>
                <div class="nav-menus">

                    <?php get_sidebar() ?>

                </div>
                <div class="copyright">
                    <p class="copyright">&copy; copyrights 2019 Dorothy Elizabeth Love. All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>

</html>