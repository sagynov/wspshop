<?php get_header(); ?>

<?php
    echo get_template_part('templates/section', 'banner');
?>
<!-- Start Categorie Area  -->
<?php
    echo get_template_part('templates/section', 'categories');
?>
<!-- End Categorie Area  -->

<!-- Start Expolre Product Area  -->
<?php
    echo get_template_part('templates/section', 'products');
?>
<!-- End Explore Product Area -->
<?php get_footer(); ?>