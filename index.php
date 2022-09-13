<?php
/**
Plugin Name: Plugin Test
Plugin URI: https://github.com/tranthanhchinh/plugin-test.git
Description: Viewer List Images Post
Author: Thanh Chinh
Version: 6.1.2
Author URI: https://chinhwp.com/

 */
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/tranthanhchinh/plugin-test.git',
    __FILE__,
    'TestPlugin'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('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');



add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'salcode_add_plugin_page_settings_link');
function salcode_add_plugin_page_settings_link( $links ) {
    $links[] = '<a href="' .
        admin_url( 'options-general.php?page=my-plugin' ) .
        '">' . __('Settings') . '</a>';
    return $links;
}

?>