<?php
/*
 * Include Custom Functions
 */
require('inc/func.php');
require('inc/hooks.php');
require('inc/widgets.php');
require('inc/enqueue.php');

// function is_custom_field_banner( $object = null ) {
//     return false;
// }


add_filter('nav_menu_item_title', 'add_dropdown_icon_to_menu_item', 10, 4);
function add_dropdown_icon_to_menu_item($title, $item, $args, $depth) {
    if (in_array('menu-item-has-children', $item->classes)) {
        $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none" style="margin-left: 6px;">
          <path d="M3.53558 4.93441C3.93559 5.46736 4.73514 5.46736 5.13515 4.93441L7.6376 1.60028C8.13236 0.941093 7.66202 0 6.83781 0H1.83292C1.00871 0 0.538374 0.941093 1.03313 1.60028L3.53558 4.93441Z" fill="white"/>
        </svg>';
        return $title . $icon;
    }
    return $title;
}




?>