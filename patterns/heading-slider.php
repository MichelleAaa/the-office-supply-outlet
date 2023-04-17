<?php
/**
 * Title: Heading Slider
 * Slug: the-office-supply-outlet/heading-slider
 * Categories: text
 * inserter: no
 */

//  Pattern Adapted From: https://wordpress.org/patterns/pattern/about-section-design-with-background-image/

$heading_data = [
    [
        "title" => "Office Accessories",
        "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore <br>magna aliqua. Ut enim ad minim veniam, quis <br>nostrud exercitation ullamco laboris nisi ut aliquip <br>ex ea commodo consequat.",
        "button-text" => "Shop Now",
        "button-link" => "",
        "img-url" => get_theme_file_uri( 'assets/images/paper-clips.jpg' )
    ],
    [
        "title" => "Notebooks & Binders",
        "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore <br>magna aliqua. Ut enim ad minim veniam, quis <br>nostrud exercitation ullamco laboris nisi ut aliquip <br>ex ea commodo consequat.",
        "button-text" => "Shop Now",
        "button-link" => "",
        "img-url" => get_theme_file_uri( 'assets/images/notebook.jpg' )
    ],
    [
        "title" => "Writing Supplies",
        "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore <br>magna aliqua. Ut enim ad minim veniam, quis <br>nostrud exercitation ullamco laboris nisi ut aliquip <br>ex ea commodo consequat.",
        "button-text" => "Shop Now",
        "button-link" => "",
        "img-url" => get_theme_file_uri( 'assets/images/pens.jpg' )
    ]
];
?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <?php

    for($count = 0; $count < count($heading_data); $count++){
        if ($count == 0) {
        ?>
            <div class="carousel-item active">
        <?php
        } else {
            ?>
            <div class="carousel-item">
        <?php
        }
        ?>
            <!-- wp:cover {"url": "<?php echo esc_url( $heading_data[$count]["img-url"] ); ?>","id":null,"minHeight":50,"customGradient":"linear-gradient(115deg,rgb(204,2,2) 0%,rgba(255,255,255,0) 6%,rgba(255,255,255,0) 93%,rgb(204,2,2) 93%)","contentPosition":"center left","align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
            <div class="wp-block-cover alignwide has-custom-content-position is-position-center-left" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(115deg,rgb(204,2,2) 0%,rgba(255,255,255,0) 6%,rgba(255,255,255,0) 93%,rgb(204,2,2) 93%)"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $heading_data[$count]["img-url"] ); ?>" data-object-fit="cover" /><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":""},"align":"full","style":{"color":{"gradient":"linear-gradient(110deg,rgb(204,2,2) 0%,rgb(204,2,2) 78%,rgba(255,255,255,0) 78%)"},"spacing":{"blockGap":"0px","padding":{"top":"30px","right":"0px","bottom":"30px","left":"30px"},"margin":{"top":"0px","bottom":"0px"}}}} -->
            <div class="wp-block-group alignfull has-background" style="background:linear-gradient(110deg,rgb(204,2,2) 0%,rgb(204,2,2) 78%,rgba(255,255,255,0) 78%);margin-top:0px;margin-bottom:0px;padding-top:30px;padding-right:0px;padding-bottom:30px;padding-left:30px"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
            <div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
            <div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"},"style":{"spacing":{"padding":{"top":"50px","right":"140px","bottom":"0px","left":"50px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
            <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:50px;padding-right:140px;padding-bottom:0px;padding-left:50px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}}} -->
            <div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"50px","left":"0px"},"blockGap":"0px"}}} -->
            <div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:50px;padding-left:0px"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}}} -->
            <h2 style="font-style:normal;font-weight:700;text-transform:uppercase"><?php echo $heading_data[$count]["title"]; ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
            <p style="font-size:16px"><?php echo $heading_data[$count]["text"]; ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"color":{"background":"#343031"},"spacing":{"padding":{"top":"10px","right":"30px","bottom":"10px","left":"30px"}},"border":{"radius":"50px"}}} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-white-color has-text-color has-background wp-element-button" style="border-radius:50px;background-color:#343031;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px"><?php echo $heading_data[$count]["button-text"]; ?></a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group --></div></div>
            <!-- /wp:cover -->
        </div>
        <?php
    }
?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>