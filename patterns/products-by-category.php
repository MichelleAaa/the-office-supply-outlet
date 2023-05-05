<?php
/**
 * Title: Heading Slider
 * Slug: the-office-supply-outlet/products-by-category
 * Categories: text
 * inserter: no
 */

?>

<!-- wp:group {"tagName":"section","layout":{"type":"constrained"}} -->
<section class="wp-block-group">
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"className":"product-category-heading-container"} -->
        <div class="wp-block-column product-category-heading-container">
            <!-- wp:heading {"textAlign":"center"} -->
            <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Products By Category', 'office-supply-outlet' ); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php esc_html_e( "Didn't find what you were looking for? Try browsing by category:", 'office-supply-outlet' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"verticalAlignment":null,"className":"products-category-container"} -->
    <div class="wp-block-columns products-category-container">
        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:image {"align":"center","id":43,"sizeSlug":"medium","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter size-medium"><img src="<?php echo get_theme_file_uri( 'assets/images/pens.jpg' ); ?>" class="wp-image-43"/></figure>
            <!-- /wp:image -->

            <!-- wp:paragraph {"align":"center","textColor":"black"} -->
            <p class="has-text-align-center has-black-color has-text-color"><strong><a href="<?php echo esc_url(site_url('/product-category/writing-supplies/')); ?>" data-type="URL" data-id="<?php echo esc_url(site_url('/product-category/writing-supplies/')); ?>"><?php esc_html_e( 'Writing Supplies', 'office-supply-outlet' ); ?></a></strong></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":20,"sizeSlug":"medium","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter size-medium"><img src="<?php echo get_theme_file_uri( 'assets/images/notebook.jpg' ); ?>" alt="graph notebook" class="wp-image-20"/></figure>
            <!-- /wp:image -->

            <!-- wp:paragraph {"align":"center","textColor":"black"} -->
            <p class="has-text-align-center has-black-color has-text-color"><strong><a href="<?php echo esc_url(site_url('/product-category/notebooks-and-binders/')); ?>" data-type="URL" data-id="<?php echo esc_url(site_url('/product-category/notebooks-and-binders/')); ?>"><?php esc_html_e( 'Notebooks &amp; Binders', 'office-supply-outlet' ); ?></a></strong></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:image {"align":"center","id":38,"sizeSlug":"medium","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter size-medium"><img src="<?php echo get_theme_file_uri( 'assets/images/binder-clips.jpg' ); ?>" class="wp-image-38"/></figure>
            <!-- /wp:image -->

            <!-- wp:paragraph {"align":"center","textColor":"black"} -->
            <p class="has-text-align-center has-black-color has-text-color"><strong><a href="<?php echo esc_url(site_url('/product-category/accessories/')); ?>" data-type="URL" data-id="<?php echo esc_url(site_url('/product-category/accessories/')); ?>"><?php esc_html_e( 'Accessories', 'office-supply-outlet' ); ?></a></strong></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:image {"align":"center","id":46,"sizeSlug":"medium","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter size-medium"><img src="<?php echo get_theme_file_uri( 'assets/images/calculator.jpg' ); ?>" class="wp-image-46"/></figure>
            <!-- /wp:image -->

            <!-- wp:paragraph {"align":"center","textColor":"black"} -->
            <p class="has-text-align-center has-black-color has-text-color"><strong><a href="<?php echo esc_url(site_url('/product-category/electronics/')); ?>" data-type="URL" data-id="<?php echo esc_url(site_url('/product-category/electronics/')); ?>"><?php esc_html_e( 'Electronics', 'office-supply-outlet' ); ?></a></strong></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</section>
<!-- /wp:group -->