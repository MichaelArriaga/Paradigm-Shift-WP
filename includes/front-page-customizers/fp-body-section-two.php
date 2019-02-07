<?php

function body_section_two_customizer($wp_customize) {

  // $lorem placeholder and theme title
  require get_template_directory().'/includes/front-page-customizers/placeholder-data.php';

 $wp_customize->add_section('body_section_two', array(
  'title' => __('Section 2', $themeTitle),
  'description' => sprintf(__('Options for Body Section 2', $themeTitle)),
  'priority' => 2
  ));

  // Heading
  $wp_customize->add_setting('body_section_two_heading', array(
    'default' => 'SECTION 2 HEADING', $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('body_section_two_heading', array(
    'label' => __('Heading', $themeTitle),
    'section' => 'body_section_two',
    'priority' => 1
  ));

  // Body Text TOP

  $wp_customize->add_setting('body_section_two_top_text', array(
    'default' => "<strong>Section 2 Top Text</strong> {$lorem}", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('body_section_two_top_text', array( 
    'label' => __('Top Text', $themeTitle),
    'section' => 'body_section_two',
    'priority' => 2
  ));

  // Body Text Bottom

  
  $wp_customize->add_setting('body_section_two_bottom_text', array(
    'default' => "<strong>Section two bottom text</strong> {$lorem}", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('body_section_two_bottom_text', array( 
    'label' => __('Bottom Text', $themeTitle),
    'section' => 'body_section_two',
    'priority' => 2
  ));


  // Icons
  // icon 1 Text
  $wp_customize->add_setting('body_section_two_icon_one_text', array(
    'default' => "Font Awesome Icon 1", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('body_section_two_icon_one_text', array( 
    'label' => __('Icon 1 Text', $themeTitle),
    'section' => 'body_section_two',
    'priority' => 2
  ));

  // icon 2 Text
  $wp_customize->add_setting('body_section_two_icon_two_text', array(
    'default' => "Font Awesome Icon 2", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('body_section_two_icon_two_text', array( 
    'label' => __('Icon 2 Text', $themeTitle),
    'section' => 'body_section_two',
    'priority' => 2
  ));

  // icon 3 Text
  $wp_customize->add_setting('body_section_two_icon_three_text', array(
    'default' => "Font Awesome Icon 3", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('body_section_two_icon_three_text', array( 
    'label' => __('Icon 3 Text', $themeTitle),
    'section' => 'body_section_two',
    'priority' => 2
  ));

  // icon 4 Text
  $wp_customize->add_setting('body_section_two_icon_four_text', array(
    'default' => "Font Awesome Icon 4", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('body_section_two_icon_four_text', array( 
    'label' => __('Icon 4 Text', $themeTitle),
    'section' => 'body_section_two',
    'priority' => 2
  ));

  // icon 5 Text
  $wp_customize->add_setting('body_section_two_icon_five_text', array(
    'default' => "Font Awesome Icon 5", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('body_section_two_icon_five_text', array( 
    'label' => __('Icon 5 Text', $themeTitle),
    'section' => 'body_section_two',
    'priority' => 2
  ));

  // icon 5 Text
  $wp_customize->add_setting('body_section_two_icon_six_text', array(
    'default' => "Font Awesome Icon 6", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('body_section_two_icon_six_text', array( 
    'label' => __('Icon 6 Text', $themeTitle),
    'section' => 'body_section_two',
    'priority' => 2
  ));
  
}

add_action('customize_register', 'body_section_two_customizer');