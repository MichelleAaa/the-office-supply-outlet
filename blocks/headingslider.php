<?php 

//  Pattern Adapted From: https://wordpress.org/patterns/pattern/about-section-design-with-background-image/

// Fallback data, if there's no posts in the heading-slides custom post type.
$heading_data = [
    [
        "title" => esc_html( "Office Accessories" ),
        "text" => esc_html( "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." ),
        "button-text" => esc_html( "Shop Now" ),
        "button-link" => esc_url(site_url('/product-category/accessories/')),
        "img-url" => get_theme_file_uri( 'assets/images/paper-clips.jpg' )
    ],
    [
        "title" => esc_html( "Notebooks & More" ),
        "text" => esc_html( "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." ),
        "button-text" => esc_html( "Shop Now" ),
        "button-link" => esc_url(site_url('/product-category/notebooks-and-binders/')),
        "img-url" => get_theme_file_uri( 'assets/images/notebook.jpg' )
    ],
    [
        "title" => esc_html( "Writing Supplies" ),
        "text" => esc_html( "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." ),
        "button-text" => esc_html( "Shop Now" ),
        "button-link" => esc_url(site_url('/product-category/writing-supplies/')),
        "img-url" => get_theme_file_uri( 'assets/images/pens.jpg' )
    ]
];

$heading_slider_query = new WP_Query(array(
    'post_type' => array('header-slides'),
    'posts_per_page' => -1,  
    'post_status' => 'publish',
)); 

if($heading_slider_query->have_posts()){
    $heading_data = [];
    while($heading_slider_query->have_posts()) {
        $heading_slider_query->the_post(); 
        $heading_data[] = [
            "title" => esc_html(get_the_title()), 
            "text" => get_the_content(), 
            "button-text" => get_field('button_text', get_the_ID()), 
            "button-link" => get_field('button-url', get_the_ID()), 
            "img-url" => get_the_post_thumbnail_url()
        ];
    }
}

?>
<header class="m-0 p-0">
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
                <div class="wp-block-cover alignwide has-custom-content-position is-position-center-left" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:50px">
                <span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(115deg,rgb(204,2,2) 0%,rgba(255,255,255,0) 6%,rgba(255,255,255,0) 93%,rgb(204,2,2) 93%)">
                </span>
                <img class="wp-block-cover__image-background" alt="heading image" src="<?php echo esc_url( $heading_data[$count]["img-url"] ); ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container">
                        <!-- wp:group {"layout":{"type":"constrained","contentSize":""},"align":"full","style":{"color":{"gradient":"linear-gradient(110deg,rgb(204,2,2) 0%,rgb(204,2,2) 58%,rgba(255,255,255,0) 58%)"},"spacing":{"blockGap":"0px","padding":{"top":"30px","right":"0px","bottom":"30px","left":"30px"},"margin":{"top":"0px","bottom":"0px"}}}} -->
                        <div class="wp-block-group alignfull has-background" style="background:linear-gradient(110deg,rgb(204,2,2) 0%,rgb(204,2,2) 58%,rgba(255,255,255,0) 58%);margin-top:0px;margin-bottom:0px;padding-top:30px;padding-right:0px;padding-bottom:30px;padding-left:30px">
                            <!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
                            <div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                <!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
                                <div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                    <!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"},"style":{"spacing":{"padding":{"top":"50px","right":"140px","bottom":"0px","left":"50px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
                                    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:50px;padding-right:140px;padding-bottom:0px;padding-left:50px">
                                    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}}} -->
                                        <div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"50px","left":"0px"},"blockGap":"0px"}}} -->
                                            <div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:50px;padding-left:0px">
                                                <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}}} -->
                                                <h2 style="font-style:normal;font-weight:700;text-transform:uppercase"><?php echo esc_html($heading_data[$count]["title"]); ?></h2>
                                                <!-- /wp:heading -->

                                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
                                                <p style="font-size:16px"><?php echo $heading_data[$count]["text"]; ?></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:buttons -->
                                                <div class="wp-block-buttons">
                                                    <!-- wp:button {"textColor":"white","style":{"color":{"background":"#343031"},"spacing":{"padding":{"top":"10px","right":"30px","bottom":"10px","left":"30px"}},"border":{"radius":"50px"}}} -->
                                                    <div class="wp-block-button"><a class="wp-block-button__link has-white-color has-text-color has-background wp-element-button" style="border-radius:50px;background-color:#343031;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px" href="<?php echo esc_html($heading_data[$count]["button-link"]); ?>"><?php echo esc_html($heading_data[$count]["button-text"]); ?></a>
                                                    </div>
                                                    <!-- /wp:button -->
                                                </div>
                                                <!-- /wp:buttons -->
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
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <?php
        }
        ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"><?php esc_html_e( 'Previous', 'office-supply-outlet' ); ?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"><?php esc_html_e( 'Next', 'office-supply-outlet' ); ?></span>
        </a>
    </div>
</header>