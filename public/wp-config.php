<?php
/**
 * Load database info and local development parameters
 */
// Change path to your production file
if ( file_exists( dirname( __FILE__ ) . '/PATH/TO/production-config.php' ) ) {
	define( 'WP_LOCAL_DEV', false );
	// Change path to your production file
    include( dirname( __FILE__ ) . '/PATH/TO/production-config.php' );
} else {
    define( 'WP_LOCAL_DEV', true );
	// Change path to your local config file
    include( dirname( __FILE__ ) . '/PATH/TO/local-config.php' );
}

/**
 * Define custom wp-content directory
 */
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/public/wp-content' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 * 
 * I prefer to use always custom prefixes but it's ok to leave 'wp_'
 */
$table_prefix = 'wp_';

define( 'WPLANG', 'es_ES' );
define( 'WP_POST_REVISIONS', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/wp/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
