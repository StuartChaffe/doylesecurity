<?php
/*
    Plugin Name: Site Settings
    Plugin URI: https://www.16by9.net
    Description: Global site functionality: custom post types, taxonomies, etc. Do not disable.
    Version: 1.0.0
    Author: Marc Jenkins
    Author URI: https://www.16by9.net
    License: GPL2
*/

// Prevent direct access
if( ! defined( 'ABSPATH' ) ) exit;

// Custom post types
require_once('post-types.php');

// Custom taxonomies
require_once('taxonomies.php');
