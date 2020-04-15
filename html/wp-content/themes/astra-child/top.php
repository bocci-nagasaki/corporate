<?php
/*
Template Name: custom-top-template
*/
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header('top');
?>

<video autoplay loop poster="polina.jpg">
<!--  <source src="polina.webm" type="video/webm">-->
  <source src="/wp-content/uploads/2020/01/kv.mp4" type="video/mp4">
</video>

<div id="primary" <?php astra_primary_class(); ?>>
    <?php
    astra_primary_content_top();
    astra_content_loop();
    the_content();
    astra_primary_content_bottom();
    ?>
</div>

<?php if (astra_page_layout() == 'right-sidebar') {
    get_sidebar();
}
get_footer();
?>
