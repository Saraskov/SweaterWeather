<?php
/*
* Template Name: Product Categories
*/

get_header();
?>
<?php if( dynamic_sidebar('sidebar-2') ) : else : endif; ?>
<?php echo do_shortcode('[product_categories]'); ?>

<?php get_footer(); ?>