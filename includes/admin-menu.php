<?php
// admin menu
function add_admin_menu() {
    add_menu_page( 'Plugin Options', 'Plugin Options', 'manage_options', 'plugin-options', 'show_plugin_options', '', 2 );
}

function show_plugin_options() {

?>

    <h1>
        <?php esc_html_e( 'Đây là trang Plugin Options', 'wp-learn' ); ?>
    </h1>

<?php

}

add_action('admin_menu', 'add_admin_menu');

// Sub menu admin
function add_admin_submenu() {

    add_submenu_page( 'plugin-options', 'General Settings', 'General Settings', 'manage_options', 'plugin-options-general-settings', 'show_general_setting_page' );

    add_submenu_page( 'plugin-options', 'Advanced Settings', 'Advanced Settings', 'manage_options', 'plugin-options-advanced-settings', 'show_advanced_setting_page' );

}

function show_general_setting_page() {

?>

    <h1>
        <?php esc_html_e( 'Đây là trang Plugin Options - General Settings', 'wp-learn' ); ?>
    </h1>

<?php

}

function show_advanced_setting_page() {

?>

    <h1>
        <?php esc_html_e( 'Đây là trang Plugin Options - Advanced Settings', 'wp-learn' ); ?>
    </h1>

<?php

}


add_action('admin_menu', 'add_admin_submenu');