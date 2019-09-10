 
<?php get_header() ?>

<?php while(have_posts()): the_post();
	the_content();


if(comments_open() || get_comments_number()):
	comments_template();
endif;









endwhile;
?>


<?php get_footer() ?>