<?php
/**
 * Plugin Name: Advanced Event Management
 * Description: Professional event management system
 * Version: 2.1.4
 * Author: Your Company
 * License: GPL v2 or later
 * Text Domain: aem
 */

if (!defined('ABSPATH')) exit;

define('AEM_VERSION', '2.1.4');
define('AEM_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('AEM_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once AEM_PLUGIN_DIR . 'includes/class-aem-loader.php';
require_once AEM_PLUGIN_DIR . 'includes/class-aem-activator.php';
require_once AEM_PLUGIN_DIR . 'includes/class-aem-deactivator.php';

register_activation_hook(__FILE__, ['AEM_Activator', 'activate']);
register_deactivation_hook(__FILE__, ['AEM_Deactivator', 'deactivate']);

function run_aem() {
    $loader = new AEM_Loader();
    $loader->run();
}

run_aem();