<?php get_header(); ?>
<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

	<?php endwhile;

else :
	echo '<p>There are no posts!</p>';
    
endif;
?>

<?php get_footer(); ?>