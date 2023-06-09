<?php
/**
 * Title: Heading Slider
 * Slug: the-office-supply-outlet/contact-us-icons
 * Categories: text
 * inserter: no
 */

//  Adapted from: https://wordpress.org/patterns/pattern/contact-us-details-with-form/

$image1 = get_theme_file_uri( 'assets/images/call_icon.svg' );
$image2 = get_theme_file_uri( 'assets/images/address_icon.svg' );
$image3 = get_theme_file_uri( 'assets/images/email_icon.svg' );

?>

<!-- wp:columns -->
<div class="wp-block-columns">
    <!-- wp:column {"className":"contact-icons-outer-wrapper"} -->
    <div class="wp-block-column contact-icons-outer-wrapper">
        <!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"50px"}}},"className":"contact-us-icons-block","layout":{"type":"default"}} -->
        <div class="wp-block-group alignfull contact-us-icons-block" style="margin-top:50px">
            <!-- wp:columns -->
            <div class="wp-block-columns">
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:group {"style":{"color":{"background":"#f4f6f9"},"spacing":{"padding":{"top":"25px","right":"25px","bottom":"25px","left":"25px"}},"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-background" style="border-radius:5px;background-color:#f4f6f9;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px">
                        <!-- wp:image {"align":"center","width":50,"height":50,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["rgb(204,2,2)","rgb(185,2,2)"]}}} -->
                        <figure class="wp-block-image aligncenter size-large is-resized"><img src="<?php echo esc_url( $image1 ); ?>" alt="phone icon" width="50" height="50"/></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"26px"},"color":{"text":"#18100f"},"spacing":{"padding":{"top":"5px","bottom":"0px"}}}} -->
                        <h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#18100f;padding-top:5px;padding-bottom:0px;font-size:26px"><?php esc_html_e( 'Contact', 'office-supply-outlet' ); ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px","lineHeight":"1.6"},"color":{"text":"#666666"},"spacing":{"padding":{"top":"0px","bottom":"0px"},"margin":{"top":"5px"}}}} -->
                        <p class="has-text-align-center has-text-color" style="color:#666666;margin-top:5px;padding-top:0px;padding-bottom:0px;font-size:15px;line-height:1.6"><?php esc_html_e( '+ (1) 234-567-8900', 'office-supply-outlet' ); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:group {"style":{"color":{"background":"#f4f6f9"},"spacing":{"padding":{"top":"25px","right":"25px","bottom":"25px","left":"25px"}},"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-background" style="border-radius:5px;background-color:#f4f6f9;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px">
                        <!-- wp:image {"align":"center","width":50,"height":50,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["rgb(204,2,2)","rgb(185,2,2)"]}}} -->
                        <figure class="wp-block-image aligncenter size-large is-resized"><img src="<?php echo esc_url( $image2 ); ?>" alt="location icon" width="50" height="50"/></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"26px"},"color":{"text":"#18100f"},"spacing":{"padding":{"top":"5px","bottom":"0px"}}}} -->
                        <h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#18100f;padding-top:5px;padding-bottom:0px;font-size:26px"><?php esc_html_e( 'Location', 'office-supply-outlet' ); ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px","lineHeight":"1.6"},"color":{"text":"#666666"},"spacing":{"padding":{"top":"0px","bottom":"0px"},"margin":{"top":"5px"}}}} -->
                        <p class="has-text-align-center has-text-color" style="color:#666666;margin-top:5px;padding-top:0px;padding-bottom:0px;font-size:15px;line-height:1.6"><?php esc_html_e( '123 Office Street, Paperclip, OH 90090', 'office-supply-outlet' ); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:group {"style":{"color":{"background":"#f4f6f9"},"spacing":{"padding":{"top":"25px","right":"25px","bottom":"25px","left":"25px"}},"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-background" style="border-radius:5px;background-color:#f4f6f9;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px">
                        <!-- wp:image {"align":"center","width":50,"height":50,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["rgb(204,2,2)","rgb(185,2,2)"]}}} -->
                        <figure class="wp-block-image aligncenter size-large is-resized"><img src="<?php echo esc_url( $image3 ); ?>" alt="email icon" width="50" height="50"/></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"26px"},"color":{"text":"#18100f"},"spacing":{"padding":{"top":"5px","bottom":"0px"}}}} -->
                        <h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#18100f;padding-top:5px;padding-bottom:0px;font-size:26px"><?php esc_html_e( 'Email Us', 'office-supply-outlet' ); ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px","lineHeight":"1.6"},"color":{"text":"#666666"},"spacing":{"padding":{"top":"0px","bottom":"0px"},"margin":{"top":"5px"}}}} -->
                        <p class="has-text-align-center has-text-color" style="color:#666666;margin-top:5px;padding-top:0px;padding-bottom:0px;font-size:15px;line-height:1.6"><?php esc_html_e( 'info@theofficesupplyoutlet.com', 'office-supply-outlet' ); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->

