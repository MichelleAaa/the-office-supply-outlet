<?php
/**
 * Title: Heading Slider
 * Slug: the-office-supply-outlet/404
 * Categories: text
 * inserter: no
 */

//  Adapted from: https://wordpress.org/patterns/pattern/404-page-16/
$image1 = get_theme_file_uri( 'assets/images/404.jpg' );

?>

<!-- wp:group {"tagName":"main", "align":"full","className":"error-404-container","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull error-404-container">
    <!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"40px","right":"20px","left":"20px"}}}} -->
    <div class="wp-block-columns alignfull" style="padding-top:60px;padding-right:20px;padding-bottom:40px;padding-left:20px">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($image1) ?>" alt="404 error"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"style":{"color":{"text":"#cc0202"},"typography":{"fontSize":"62px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
            <h2 class="wp-block-heading has-text-color" style="color:#cc0202;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:62px"><?php esc_html_e( 'Oops...', 'office-supply-outlet' ); ?><br></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontSize":"26px","lineHeight":1.1}}} -->
            <p class="has-text-align-left" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);font-size:26px;line-height:1.1"><strong><?php esc_html_e( 'We are not being able to find the page you are looking for.', 'office-supply-outlet' ); ?></strong></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"10px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
            <p style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:10px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:18px"><?php esc_html_e( 'The page you are looking for was moved, removed, renamed or never existed.', 'office-supply-outlet' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:search {"label":"","showLabel":false,"placeholder":"Search....","width":388,"widthUnit":"px","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"color":{"background":"#cc0202"},"typography":{"fontSize":"16px"},"border":{"width":"0px","style":"none"}},"textColor":"white"} /-->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"style":{"color":{"background":"#343031"},"border":{"radius":{"topLeft":"0px","bottomRight":"0px","topRight":"0px","bottomLeft":"0px"}}},"className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#343031"><?php esc_html_e( 'Back to home', 'office-supply-outlet' ); ?></a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</main>
<!-- /wp:group -->