<?php

function body_section_one_customizer($wp_customize) {

  // $lorem placeholder and theme title
  require get_template_directory().'/includes/front-page-customizers/placeholder-data.php';

 $wp_customize->add_section('body_section_one', array(
  'title' => __('Section 1', $themeTitle),
  'description' => sprintf(__('Options for Body Section 1', $themeTitle)),
  'priority' => 2
));

// Image
$wp_customize->add_setting('body_section_one_img', array(
    'default' => get_bloginfo('template_directory') . '/images/pic01.jpg',
    'type' => 'theme_mod'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'body_section_one_img', 
    array(
      'label' => __('Image', $themeTitle),
      'section' => 'body_section_one',
      'settings' => 'body_section_one_img',
      'priority' => 1
    )
    ));

// Heading
$wp_customize->add_setting('body_section_one_heading', array(
  'default' => 'Section 1 Heading', $themeTitle,
  'type' => 'theme_mod'
));

$wp_customize->add_control('body_section_one_heading', array(
  'label' => __('Heading', $themeTitle),
  'section' => 'body_section_one',
  'priority' => 3
));

// Content
$wp_customize->add_setting('body_section_one_content', array(
  'default' => "<strong>Section 1 Content</strong> {$lorem}", $themeTitle,
  'type' => 'theme_mod'
));

$wp_customize->add_control('body_section_one_content', array(
  'label' => __('Content', $themeTitle),
  'section' => 'body_section_one',
  'priority' => 3
));
}

add_action('customize_register', 'body_section_one_customizer');