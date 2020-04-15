<?php
/*
Template Name: custom-top-template
*/
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header('top');
if (astra_page_layout() == 'left-sidebar') {
    get_sidebar();
}
?>

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
