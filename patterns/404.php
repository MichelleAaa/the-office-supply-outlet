<?php
/**
 * Title: Heading Slider
 * Slug: the-office-supply-outlet/404
 * Categories: text
 * inserter: no
 */

//  Adapted from: https://wordpress.org/patterns/pattern/404-page-16/
?>

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"40px","right":"20px","left":"20px"}}}} -->
<div class="wp-block-columns alignfull" style="padding-top:60px;padding-right:20px;padding-bottom:40px;padding-left:20px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/404.jpg' )); ?>" alt="" /></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"color":{"text":"#078586"},"typography":{"fontSize":"62px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<h2 class="wp-block-heading has-text-color" style="color:#078586;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:62px">Oops...<br></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontSize":"26px","lineHeight":1.1}}} -->
<p class="has-text-align-left" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:26px;line-height:1.1"><strong>We are not being able to find the page you are looking for.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"10px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<p style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:10px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:18px">The page you are looking for was moved, removed, renamed or never existed.</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search....","width":388,"widthUnit":"px","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"color":{"background":"#078586"},"typography":{"fontSize":"16px"},"border":{"width":"0px","style":"none"}},"textColor":"white"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#078586"},"border":{"radius":{"topLeft":"0px","bottomRight":"0px","topRight":"15px","bottomLeft":"15px"}}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:0px;background-color:#078586">Back to home</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->