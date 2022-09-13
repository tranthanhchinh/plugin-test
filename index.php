<?php
/**
Plugin Name: Plugin Test
Plugin URI: https://chinhwp.com/
Description: Viewer List Images Post
Author: Thanh Chinh
Version: 6.1.2
Author URI: https://chinhwp.com/
GitHub Plugin URI: https://github.com/tranthanhchinh/plugin-test
GitHub Branch: master
 */
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/tranthanhchinh/plugin-test',
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