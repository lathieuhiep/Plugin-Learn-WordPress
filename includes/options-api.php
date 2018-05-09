<?php

// Hàm bổ sung menu con vào một menu cha
function add_submenu_options() {

    add_submenu_page( 'themes.php', 'Theme Options', 'Theme Options', 'manage_options', 'theme-options', 'access_menu_options' );

}

// Hàm xử lý khi click vào menu
function access_menu_options() {

    require( 'templates/theme-option.php' );

}

// Thêm hành động hiển thị menu con vào Action admin_menu Hooks
add_action( 'admin_menu', 'add_submenu_options' );