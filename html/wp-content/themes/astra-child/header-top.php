<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
    <?php astra_head_top(); ?>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous"
  >

    <?php wp_head(); ?>
    <?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?> style="position: relative;" data-spy="scroll" data-target="#navbar">

<?php astra_body_top(); ?>
<?php wp_body_open(); ?>
<div
    <?php
    echo astra_attr(
        'site',
        array(
            'id' => 'page',
            'class' => 'hfeed site',
        )
    );
    ?>
>
  <a class="skip-link screen-reader-text" href="#content">
      <?php echo esc_html(astra_default_strings('string-header-skip-link', false)); ?>
  </a>
    <?php astra_header_before(); ?>
    <?php include(ABSPATH . 'wp-content/themes/astra-child/top-page-header.php'); ?>
    <?php astra_header_after(); ?>
    <?php astra_content_before(); ?>
    <?php astra_content_top(); ?>
