<?php



function site_files() {
  // '/' in front of path is required otherewise resources won't be loaded
  wp_enqueue_style('font_awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), null, 'all');
  // ~/style.css
  wp_enqueue_style('site_main_styles', get_stylesheet_uri());

  // js
  wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery.min.js'), NULL, '1.0', true);
  wp_enqueue_script('scrolly_js', get_theme_file_uri('/assets/js/jquery.scrolly.min.js'), NULL, '1.0', true);
  wp_enqueue_script('browser_js', get_theme_file_uri('/assets/js/browser.min.js'), NULL, '1.0', true);
  wp_enqueue_script('breakpoints_js', get_theme_file_uri('/assets/js/breakpoints.min.js'), NULL, '1.0', true);
  wp_enqueue_script('main_js', get_theme_file_uri('/assets/js/main.js'), NULL, '1.0', true);
}
// load style.css
add_action('wp_enqueue_scripts', 'site_files'); 



function paradigm_theme_setup() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'paradigm_theme_setup');


// customizers file
require get_template_directory() . '/includes/customizers.php';

?>
