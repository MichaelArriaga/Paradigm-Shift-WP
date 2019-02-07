<?php

function body_section_three_customizer($wp_customize) {

  // $lorem placeholder and theme title
  require get_template_directory().'/includes/front-page-customizers/placeholder-data.php';

 $wp_customize->add_section('body_section_three', array(
  'title' => __('Section 3', $themeTitle),
  'description' => sprintf(__('Options for Body Section 3', $themeTitle)),
  'priority' => 2
  ));

  // Heading
  $wp_customize->add_setting('body_section_three_heading', array(
    'default' => 'Section 3 Heading', $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('body_section_three_heading', array(
    'label' => __('Heading', $themeTitle),
    'section' => 'body_section_three',
    'priority' => 1
  ));

  // Body Text TOP

  $wp_customize->add_setting('body_section_three_content', array(
    'default' => "<strong>Section 3 Text Strong</strong> {$lorem}", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('body_section_three_content', array( 
    'label' => __('Content', $themeTitle),
    'section' => 'body_section_three',
    'priority' => 2
  ));
  
}

add_action('customize_register', 'body_section_three_customizer');