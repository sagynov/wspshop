<?php get_header(); ?>

<div class="axil-product-area bg-color-white axil-section-gap">
    <div class="container">
        <div class="section-title-wrapper">
            <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Our Products</span>
            <h2 class="title"><?php echo get_the_archive_title(); ?></h2>
        </div>
        <div class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
            <div class="slick-single-layout">
                <div class="row row--15">   
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>
    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
        <div class="axil-product product-style-one">
            <div class="thumbnail">
                <a href="single-product.html">
                    <img src="<?php echo get_field('product_image') ?>" alt="Product Images">
                </a>
                <div class="label-block label-right">
                    <?php 
                    if(get_field('product_discount')){
                    ?>
                    <div class="product-badget">Скидка <?php echo get_field('product_discount') ?>%</div>
                    <?php
                    }
                    ?>
                </div>
                <div class="product-hover-action">
                    <ul class="cart-action">
                        <li class="select-option"><a href="#" class="product-toCart" 
                        data-price="<?php echo get_field('product_price') ?>"
                        data-image="<?php echo get_field('product_image') ?>"
                        data-title="<?php echo get_the_title(); ?>"
                        data-id="<?php echo get_the_ID(); ?>">В корзину</a></li>
                    </ul>
                </div>
            </div>
            <div class="product-content">
                <div class="inner">
                    <h5 class="title"><a href="single-product.html"><?php echo get_the_title(); ?></a></h5>
                    <div class="product-price-variant">
                        <span class="price current-price"><i class="fas fa-tenge"></i> <?php echo get_field('product_price'); ?></span>
                        <?php 
                        if(get_field('product_discount')){
                        ?>
                        <span class="price old-price">
                            <?php
                                $old_price = get_field('product_price') + (get_field('product_price') * get_field('product_discount') / 100);
                                echo $old_price;
                            ?>
                        </span>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        endwhile;
    endif;
    ?>
    
    </div>
        <div class="row">
            <div class="col-lg-12 text-center mt--20 mt_sm--0">
                <a href="shop.html" class="axil-btn btn-bg-lighter btn-load-more">Загрузить еще</a>
            </div>
        </div>
    </div>
</div>
<!-- End Expolre Product Area  -->
</div>
<?php get_footer(); ?>