<?php
/**
Plugin Name: Plugin Test
Plugin URI: https://chinhwp.com/
Description: Viewer List Images Post
Author: Thanh Chinh
Version: 1.0.0
Author URI: https://chinhwp.com/
 */

if ((string) get_option('my_licence_key') !== '') {
    include_once plugin_dir_path(__FILE__) . '/PDUpdater.php';

    $updater = new PDUpdater(__FILE__);
    $updater->set_username('username-here');
    $updater->set_repository('repository-name-here');
    $updater->authorize(get_option('my_licence_key'));
    $updater->initialize();
}
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'salcode_add_plugin_page_settings_link');
function salcode_add_plugin_page_settings_link( $links ) {
    $links[] = '<a href="' .
        admin_url( 'options-general.php?page=my-plugin' ) .
        '">' . __('Settings') . '</a>';
    return $links;
}
function plugin_loader(){
  echo "Loader";
}
add_action('admin_init', 'plugin_loader');
?>