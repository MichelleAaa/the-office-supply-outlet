<?php
/**
 * Title: Three Highlights
 * Slug: the-office-supply-outlet/three-highlights
 * Categories: text
 * inserter: no
 */

//  Adapted from: https://wordpress.org/patterns/pattern/effective-solutions/

$image1 = get_theme_file_uri( 'assets/images/box.png' );
$image2 = get_theme_file_uri( 'assets/images/white-shopping-basket.png' );
$image3 = get_theme_file_uri( 'assets/images/truck.png' );
$image4 = get_theme_file_uri( 'assets/images/boxes.jpg' );
$image5 = get_theme_file_uri( 'assets/images/cardboard-box.jpg' );
$image6 = get_theme_file_uri( 'assets/images/mailbox.jpg' );

?>

<!-- wp:group {"tagName":"section","layout":{"type":"constrained"}} -->
<section class="wp-block-group">
        <!-- wp:columns {"align":"full","style":{"color":{"gradient":"linear-gradient(180deg,rgb(204,2,2) 56%,rgb(1,1,1) 56%,rgb(255,255,255) 56%)"}},"className":"three-highlights-container"} -->
        <div class="wp-block-columns alignfull three-highlights-container has-background" style="background:linear-gradient(180deg,rgb(204,2,2) 56%,rgb(1,1,1) 56%,rgb(255,255,255) 56%)">
                <!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"0px","bottom":"0px","left":"0px"}}},"className":"three-highlights-inner-content-container"} -->
                <div class="wp-block-column three-highlights-inner-content-container" style="padding-top:30px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"black"} -->
                        <h2 class="wp-block-heading has-text-align-center has-black-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-size:22px">
                        <strong><?php esc_html_e( 'Providing', 'office-supply-outlet' ); ?></strong></h2>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"38px"},"spacing":{"margin":{"top":"5px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"white"} -->
                        <h1 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="margin-top:5px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-size:38px"><strong><?php esc_html_e( 'Quality Products', 'office-supply-outlet' ); ?></strong></h1>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"17px"},"spacing":{"margin":{"top":"10px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"white"} -->
                        <p class="has-text-align-center has-white-color has-text-color" style="margin-top:10px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-size:17px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'office-supply-outlet' ); ?>
                        </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:columns {"style":{"spacing":{"padding":{"top":"20px"}}}} -->
                        <div class="wp-block-columns" style="padding-top:20px">
                                <!-- wp:column {"style":{"border":{"color":"#87878747","width":"2px"},"spacing":{"padding":{"bottom":"30px"}}},"backgroundColor":"white"} -->
                                <div class="wp-block-column has-border-color has-white-background-color has-background" style="border-color:#87878747;border-width:2px;padding-bottom:30px">
                                        <!-- wp:image {"id":172,"sizeSlug":"large","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-large"><img src="<?php echo esc_url( $image4 ); ?>" alt="boxes for shipping" class="wp-image-172"/></figure>
                                        <!-- /wp:image -->

                                        <!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"padding":{"top":"0px","right":"20px","bottom":"0px","left":"20px"}}}} -->
                                        <div class="wp-block-columns" style="padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:column {"verticalAlignment":"center"} -->
                                                <div class="wp-block-column is-vertically-aligned-center">
                                                <!-- wp:columns -->
                                                        <div class="wp-block-columns">
                                                        <!-- wp:column {"className":"three-highlights-icon-container"} -->
                                                                <div class="wp-block-column three-highlights-icon-container">
                                                                        <!-- wp:image {"id":188,"sizeSlug":"full","linkDestination":"none"} -->
                                                                        <figure class="wp-block-image size-full"><img src="<?php echo esc_url( $image1 ); ?>" alt="black-box" class="wp-image-188"/></figure>
                                                                        <!-- /wp:image -->
                                                                </div>
                                                                <!-- /wp:column -->
                                                        </div>
                                                        <!-- /wp:columns -->

                                                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"15px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontSize":"21px"}}} -->
                                                        <p class="has-text-align-center" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:15px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:21px"><strong><?php esc_html_e( 'Bulk Order Discount', 'office-supply-outlet' ); ?></strong></p>
                                                        <!-- /wp:paragraph -->

                                                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"2px","right":"2px","bottom":"2px","left":"2px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontSize":"14px"}}} -->
                                                        <p class="has-text-align-center" style="margin-top:2px;margin-right:2px;margin-bottom:2px;margin-left:2px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:14px">
                                                        <br><?php esc_html_e( 'Lorem ipsum dolor sit amet. Consecteture adipiscing elit, sed do eiusmod tempor incidientunt ut labore et dolore magna aliqu.', 'office-supply-outlet' ); ?><a href="<?php echo esc_url(site_url('/faq')); ?>"></a></p>
                                                        <!-- /wp:paragraph -->

                                                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontSize":"14px","textDecoration":"underline"},"color":{"text":"#078586"}}} -->
                                                        <p class="has-text-align-center has-text-color" style="color:#078586;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:14px;text-decoration:underline"><strong><a href="<?php echo esc_url(site_url('/faq')); ?>" data-type="page" data-id="71" target="_blank" rel="noreferrer noopener"><?php esc_html_e( 'Read More', 'office-supply-outlet' ); ?></a></strong></p>
                                                        <!-- /wp:paragraph -->
                                                </div>
                                                <!-- /wp:column -->
                                        </div>
                                        <!-- /wp:columns -->
                                </div>
                                <!-- /wp:column -->

                                <!-- wp:column {"style":{"border":{"width":"2px"},"spacing":{"padding":{"bottom":"30px"}},"color":{"background":"#cc0202"}}} -->
                                <div class="wp-block-column has-background" style="border-width:2px;background-color:#cc0202;padding-bottom:30px">
                                        <!-- wp:image {"id":174,"sizeSlug":"large","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-large">
                                        <img src="<?php echo esc_url( $image5 ); ?>" alt="single-box" class="wp-image-174"/></figure>
                                        <!-- /wp:image -->

                                        <!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"20px","bottom":"0px","left":"20px"}}}} -->
                                        <div class="wp-block-columns" style="padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:20px">
                                                <!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                                                <div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                                        <!-- wp:columns -->
                                                        <div class="wp-block-columns">
                                                                <!-- wp:column {"className":"three-highlights-icon-container three-highlights-icon-container-white"} -->
                                                                <div class="wp-block-column three-highlights-icon-container">
                                                                        <!-- wp:image {"id":188,"sizeSlug":"full","linkDestination":"none"} -->
                                                                        <figure class="wp-block-image size-full"><img src="<?php echo esc_url( $image2 ); ?>" alt="white-shopping-basket" class="wp-image-188"/></figure>
                                                                        <!-- /wp:image -->
                                                                </div>
                                                                <!-- /wp:column -->
                                                        </div>
                                                        <!-- /wp:columns -->

                                                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"padding":{"top":"15px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontSize":"21px"}},"textColor":"white"} -->
                                                        <p class="has-text-align-center has-white-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:15px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:21px"><strong><?php esc_html_e( 'No Minimum Order', 'office-supply-outlet' ); ?></strong></p>
                                                        <!-- /wp:paragraph -->

                                                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"white"} -->
                                                        <p class="has-text-align-center has-white-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:14px">
                                                        <br><?php esc_html_e( 'Lorem ipsum dolor sit amet. Consecteture adipiscing elit, sed do eiusmod tempor incidientunt ut labore et dolore magna aliqu.', 'office-supply-outlet' ); ?><a href="<?php echo esc_url(site_url('/faq')); ?>"></a></p>
                                                        <!-- /wp:paragraph -->

                                                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontSize":"14px","textDecoration":"underline"}},"textColor":"white"} -->
                                                        <p class="has-text-align-center has-white-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:14px;text-decoration:underline"><strong><a href="<?php echo esc_url(site_url('/faq')); ?>" data-type="page" data-id="71" target="_blank" rel="noreferrer noopener"><?php esc_html_e( 'Read More', 'office-supply-outlet' ); ?></a></strong></p>
                                                        <!-- /wp:paragraph -->
                                                </div>
                                                <!-- /wp:column -->
                                        </div>
                                        <!-- /wp:columns -->
                                </div>
                                <!-- /wp:column -->

                                <!-- wp:column {"style":{"border":{"color":"#87878747","width":"2px"},"spacing":{"padding":{"bottom":"30px"}}},"backgroundColor":"white"} -->
                                <div class="wp-block-column has-border-color has-white-background-color has-background" style="border-color:#87878747;border-width:2px;padding-bottom:30px">
                                        <!-- wp:image {"id":173,"sizeSlug":"large","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-large"><img src="<?php echo esc_url( $image6 ); ?>" alt="mailbox" class="wp-image-173"/></figure>
                                        <!-- /wp:image -->

                                        <!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"20px","bottom":"0px","left":"20px"}}}} -->
                                        <div class="wp-block-columns" style="padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:20px">
                                                <!-- wp:column -->
                                                <div class="wp-block-column">
                                                        <!-- wp:columns -->
                                                        <div class="wp-block-columns">
                                                                <!-- wp:column {"className":"three-highlights-icon-container"} -->
                                                                <div class="wp-block-column three-highlights-icon-container">
                                                                        <!-- wp:image {"id":188,"sizeSlug":"full","linkDestination":"none"} -->
                                                                        <figure class="wp-block-image size-full"><img src="<?php echo esc_url( $image3 ); ?>" alt="truck" class="wp-image-188"/></figure>
                                                                        <!-- /wp:image -->
                                                                </div>
                                                                <!-- /wp:column -->
                                                        </div>
                                                        <!-- /wp:columns -->

                                                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"21px"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"padding":{"top":"15px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                                                        <p class="has-text-align-center" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:15px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:21px"><strong><?php esc_html_e( 'Delivery in 3-5 Business Days', 'office-supply-outlet' ); ?></strong></p>
                                                        <!-- /wp:paragraph -->

                                                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontSize":"14px"}}} -->
                                                        <p class="has-text-align-center" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:14px">
                                                        <br><?php esc_html_e( 'Lorem ipsum dolor sit amet. Consecteture adipiscing elit, sed do eiusmod tempor incidientunt ut labore et dolore magna aliqu.', 'office-supply-outlet' ); ?><a href="<?php echo esc_url(site_url('/faq')); ?>"></a></p>
                                                        <!-- /wp:paragraph -->

                                                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontSize":"14px","textDecoration":"underline"},"color":{"text":"#078586"}}} -->
                                                        <p class="has-text-align-center has-text-color" style="color:#078586;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:14px;text-decoration:underline"><strong><a href="<?php echo esc_url(site_url('/faq')); ?>" data-type="page" data-id="71" target="_blank" rel="noreferrer noopener"><?php esc_html_e( 'Read More', 'office-supply-outlet' ); ?></a></strong></p>
                                                        <!-- /wp:paragraph -->
                                                </div>
                                                <!-- /wp:column -->
                                        </div>
                                        <!-- /wp:columns -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:column -->
        </div>
                <!-- /wp:columns -->
</section>
<!-- /wp:group -->