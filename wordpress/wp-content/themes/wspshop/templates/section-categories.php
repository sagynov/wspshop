<?php
    $args = array(
        'taxonomy' => 'product_categories',
        'hide_empty' => false
    );
    $categories = get_terms($args);
?>
<div class="axil-categorie-area bg-color-white axil-section-gapcommon">
    <div class="container">
        <div class="section-title-wrapper">
            <span class="title-highlighter highlighter-secondary"> <i class="far fa-tags"></i> Категории</span>
            <h2 class="title">Выбрать по категории</h2>
        </div>
        <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
            <?php foreach ($categories as $category) { ?>
            <div class="slick-single-layout">
                <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500">
                    <a href="<?php echo get_term_link($category) ?>">
                        <img class="img-fluid" src="<?php echo get_field('category_image', 'category_'.$category->term_id) ?>" alt="product categorie">
                        <h6 class="cat-title"><?php echo $category->name; ?></h6>
                    </a>
                </div>
                <!-- End .categrie-product -->
            </div>
            <?php } ?>
        </div>
    </div>
</div>