<?php
/**
Plugin Name: Plugin Test
Plugin URI: https://chinhwp.com/
Description: Viewer List Images Post
Author: Thanh Chinh
Version: 3.0.0
Author URI: https://chinhwp.com/
 */

    include_once plugin_dir_path(__FILE__) . '/PDUpdater.php';
    $updater = new PDUpdater(__FILE__);
    $updater->set_username('tranthanhchinh');
    $updater->set_repository('plugin-test');
    $updater->authorize('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');
    $updater->initialize();

add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'salcode_add_plugin_page_settings_link');
function salcode_add_plugin_page_settings_link( $links ) {
    $links[] = '<a href="' .
        admin_url( 'options-general.php?page=my-plugin' ) .
        '">' . __('Settings') . '</a>';
    return $links;
}

?>