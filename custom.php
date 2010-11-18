<?php
/**
 * Custom helper functions for the theme
 */
?>
add_filter(array('Display', 'Item', 'Dublin Core', 'Title'), 'theme_show_untitled_items');

function theme_show_untitled_items($title)
{
    // Remove whitespace and formatting, then check empty
    $prepTitle = trim(strip_formatting($title));
    if (empty($prepTitle)) {
       return '[Untitled]'; 
    }
    return $title;
}