<?php

function body_section_four_customizer($wp_customize) {

  // $lorem placeholder and theme title
  require get_template_directory().'/includes/front-page-customizers/placeholder-data.php';

 $wp_customize->add_section('body_section_four', array(
  'title' => __('Section 4', $themeTitle),
  'description' => sprintf(__('Options for Body Section 4', $themeTitle)),
  'priority' => 2
));



// Heading
$wp_customize->add_setting('body_section_four_heading', array(
  'default' => 'Section 4 Heading', $themeTitle,
  'type' => 'theme_mod'
));

$wp_customize->add_control('body_section_four_heading', array(
  'label' => __('Heading', $themeTitle),
  'section' => 'body_section_four',
  'priority' => 3
));

// Content
$wp_customize->add_setting('body_section_four_content', array(
  'default' => "<strong>Section 4 Content</strong> {$lorem}", $themeTitle,
  'type' => 'theme_mod'
));

$wp_customize->add_control('body_section_four_content', array(
  'label' => __('Content', $themeTitle),
  'section' => 'body_section_four',
  'priority' => 3
));

// Button One
// text
$wp_customize->add_setting('body_section_four_button_primary_text', array(
  'default' => "Get Started", $themeTitle,
  'type' => 'theme_mod'
));
$wp_customize->add_control('body_section_four_button_primary_text', array(
  'label' => __('Button Primary - Text', $themeTitle),
  'section' => 'body_section_four',
  'priority' => 4
));
// hyperlink
$wp_customize->add_setting('body_section_four_button_primary_link', array(
  'default' => "#", $themeTitle,
  'type' => 'theme_mod'
));
$wp_customize->add_control('body_section_four_button_primary_link', array(
  'label' => __('Button Primary - Link URL', $themeTitle),
  'section' => 'body_section_four',
  'priority' => 4
));

// Button Two
// text
$wp_customize->add_setting('body_section_four_button_secondary_text', array(
  'default' => "Learn More", $themeTitle,
  'type' => 'theme_mod'
));
$wp_customize->add_control('body_section_four_button_secondary_text', array(
  'label' => __('Button Secondary - Text', $themeTitle),
  'section' => 'body_section_four',
  'priority' => 4
));
// hyperlink
$wp_customize->add_setting('body_section_four_button_secondary_link', array(
  'default' => "#", $themeTitle,
  'type' => 'theme_mod'
));
$wp_customize->add_control('body_section_four_button_secondary_link', array(
  'label' => __('Button Secondary - Link URL', $themeTitle),
  'section' => 'body_section_four',
  'priority' => 4
));


}

add_action('customize_register', 'body_section_four_customizer');