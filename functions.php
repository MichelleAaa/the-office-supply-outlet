<?php

function wpbootstrap_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css' );

    wp_register_script('jquery-3.5.1', 'https://code.jquery.com/jquery-3.5.1.js', false, '3.5.1', true);

    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', false, '1.16.1', true);

    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), true);

    wp_enqueue_style('main_styles', get_stylesheet_uri());

    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400|Roboto:400|Source+Sans+Pro:600|Forum:600|Poppins:200');

}

add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');

// For non-editable blocks:
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

