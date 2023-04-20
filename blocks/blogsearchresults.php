<?php     
$searchQuery = new WP_Query(array(
    'post_type' => array('post'),
    'posts_per_page' => -1,  
    'post_status' => 'publish',
    's' => esc_html(get_search_query())
)); 
?>

<div class="container-fluid block-search-results-container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-9 col-xl-10 d-flex justify-content-center align-items-center flex-column mb-3">
            <h2>Search Results</h2>
            <p>You searched for "<?php echo esc_html(get_search_query()) ?>".</p>
        </div>
        <section class="col-12 col-md-9 col-xl-10 individual-post-container">
            <?php 
            // Each blog post's ID is added to the postIds array, and then checked below in the if(!in_array(get_the_ID(), $postIds)) statement so duplicate posts are not output if the keyword is both in the title and content.
            $postIds = array();
            if($searchQuery->have_posts()){
                while($searchQuery->have_posts()) {
                    $searchQuery->the_post(); 
                    
                    if(!in_array(get_the_ID(), $postIds)) {
                    ?>           
                        <article class="row d-flex justify-content-center align-items-center">
                            <div class="col-11 col-lg-4">
                                <figure class="wp-block-post-featured-image">
                                    <?php the_post_thumbnail(); ?>
                                </figure>
                            </div>
                            <div class="col-11 col-lg-8">
                                <h2 class="wp-block-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="mb-2"><?php echo wp_trim_words(get_the_content(), 55) . "..."; ?></p>
                                <a href="<?php the_permalink(); ?>" class="wp-block-read-more">Read More</a>
                                <div class="wp-block-post-author-name"><?php the_author(); ?></div>
                                <div class="wp-block-post-date"><?php the_time('F j, Y'); ?></div>
                            </div>
                        </article>
                        <?php 
                        $postIds[] = get_the_ID(); 
                    }
                } 
            } else { ?> 
                <div class="row d-flex justify-content-center align-items-center my-5">
                    <div class="col-11 col-lg-10">
                        <h2 class="post-item-title headline--small text-center">Sorry, no results match that search.</h2>
                    </div>
                </div>  
            <?php } 
                wp_reset_postdata();
            ?>
        </section>
    </div>
</div>