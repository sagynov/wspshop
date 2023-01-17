<?php get_header(); ?>


<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();

    ?>
    <section class="onepage-screen-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="content sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                        <h1 class="title"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    endwhile;
endif;
?>

<?php get_footer(); ?>