<?php

function wpbootstrap_enqueue_styles() {
    // wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css' );

    wp_enqueue_script('main-js', get_theme_file_uri('index.js'), array('jquery'), '1.0', true);

    wp_register_script('jquery-3.5.1', 'https://code.jquery.com/jquery-3.5.1.js', false, '3.5.1', true);

    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', false, '1.16.1', true);

    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), true);

    wp_enqueue_style('main_styles', get_stylesheet_uri());

    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400|Roboto:400|Source+Sans+Pro:600|Forum:600|Poppins:200');

}

add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');

function custom_post_types(){
  register_post_type('faq', array(
    'show_in_rest' => true, 
    'supports' => array('title', 'editor', 'thumbnail'), 
    'rewrite' => array('slug' => 'faq'), 
    'public' => true, 	
    'taxonomies'  => array( 'category' ),
    // 'has_archive' => true, // In order for the new post type to have an archive, we have to add this line.  – The archive can typically be accessed with the site url + /(new post type – in this case “/event/”
    //Note that the archive will by default be powered by archive.php. If you want a new theme file that's only responsible for the event archive, you would need to create a new file in the theme's folder with the rest of the .php files. The name of the file must be archive-(name of custom post type).php. In this case, it's archive-event.php
    'menu_icon' => 'dashicons-clipboard', 
    'labels' => array(
      'name' => "FAQs", 
      'add_new_item' => "Add New FAQ",
        'edit_item' => 'Edit FAQ',
        'all_items' => "All FAQs",
        'singular_name' => 'FAQ'
    ) 
  ));
}

add_action('init', 'custom_post_types');

// For blocks that are not editable in the full site editor:
class PlaceholderBlock {
  function __construct($name) {
    $this->name = $name;
    add_action('init', [$this, 'onInit']);
  }

  function ourRenderCallback($attributes, $content) {
    ob_start();
    require get_theme_file_path("/blocks/{$this->name}.php");
    return ob_get_clean();
  }

  function onInit() {
    wp_register_script($this->name, get_stylesheet_directory_uri() . "/blocks/{$this->name}.js", array('wp-blocks', 'wp-editor'));
    
    register_block_type("ourblocktheme/{$this->name}", array(
      'editor_script' => $this->name,
      'render_callback' => [$this, 'ourRenderCallback']
    ));
  }
}

new PlaceholderBlock("contactusform");
new PlaceholderBlock("faqlist");
new PlaceholderBlock("blogsearchresults");

