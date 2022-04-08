<?php

// Set theme defaults, tidy up WP
require_once( 'lib/theme-setup.php' );

// Image settings
require_once( 'lib/images.php' );

// Load scrips
require_once( 'lib/enqueue.php' );

// Gutenberg settings
require_once( 'lib/gutenberg.php' );

// Configure menus
require_once( 'lib/menus.php' );

// ACF configuration
require_once( 'lib/acf.php' );

// Vendor specific functions
require_once( 'lib/vendors.php' );

// Helper functions
require_once( 'lib/helpers.php' );

// Environment indicator
require_once( 'lib/env-indicator.php' );
