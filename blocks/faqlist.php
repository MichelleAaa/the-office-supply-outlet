<div class="container-fluid mb-5">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-11 col-md-8">
      <?php  
      $categories = get_categories(array(
        'post_type' => 'faq',
        'hide_empty' => false,
        ) );

      $category_names = [];
      $post_number = 0;

      for($count = 0; $count < count($categories); $count++){
        if($categories[$count]->category_count){
        $category_names[] = [$categories[$count]->slug, $categories[$count]->name];
        }
      }

      for($count = 0; $count < count($categories); $count++){

        $faqPosts = new WP_Query(array(
          "posts_per_page" => -1, 
          "category_name" => $category_names[$count][0], //category_name (string)- use category slug (NOT name).
          'post_type' => 'faq'
        )); 

        ?>
        <div class="faq-card-title">
          <h3 class="text-center"><?php echo $category_names[$count][1]; ?></h3>
        </div>
        <div class="accordion" id="accordion-<?php echo $count; ?>">

        <?php
          
          while($faqPosts->have_posts()){
            $faqPosts->the_post();     
          ?>

          <div class="card">
            <div class="card-header" id="heading-<?php echo $post_number; ?>">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left d-flex justify-content-between flex-row" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $post_number; ?>" aria-expanded="true" aria-controls="collapse<?php echo $post_number; ?>">
                  <?php the_title(); ?>
                  <span class="<?php echo $category_names[$count][0]; ?>">
                  +
                </span>
                </button>
                
              </h2>
            </div>
            <div id="collapse-<?php echo $post_number; ?>" class="collapse" aria-labelledby="heading-<?php echo $post_number; ?>" data-parent="#accordion-<?php echo $count; ?>">
              <div class="card-body">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
          <?php 
          $post_number = $post_number + 1;
        } 
        ?>
      </div>
      <?php 
      wp_reset_postdata();
      }
      ?>
    </div>
  </div>
</div>