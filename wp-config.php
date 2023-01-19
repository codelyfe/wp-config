<?php
if( !defined('WPMU_PLUGIN_DIR') ) define( 'WPMU_PLUGIN_DIR', dirname(__FILE__).'/wp-content/wp-safe-mode' ); //WP Safe Mode

define('WP_CACHE', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'DATABASE' );

/** MySQL database username */
define( 'DB_USER', 'USERNAME' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PASSWORD' );

/** MySQL hostname */
define( 'DB_HOST', 'HOST' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/*
| Set wordpress memory limit
*/
define('WP_MEMORY_LIMIT', '256M');
define( 'WP_MAX_MEMORY_LIMIT', '512M' );

/**
 * For developers: WordPress debugging mode. ( More Advance tools at bottom )
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );


/*

| Move the wp-content directory

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/extensions' );
define( 'WP_CONTENT_URL', 'http://mywebsite.com/extensions' );

| Move plugins directory

define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/extensions/plugins' );
define( 'WP_PLUGIN_URL', 'http://mywebsite.com/extensions/plugins' );
define( 'PLUGINDIR', dirname(__FILE__) . '/extensions/plugins' );

| Create additional theme directory

register_theme_directory( dirname( __FILE__ ) . '/themes-dev' );

| Move the uploads directory

define( 'UPLOADS', 'uploads' );

*/


/*
| Debug Settings Advanced

define( 'WP_DEBUG', true );

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

define( 'SCRIPT_DEBUG', true );
*/

/*

define( 'AUTOSAVE_INTERVAL', 160 );

define( 'WP_POST_REVISIONS', false );

define( 'WP_POST_REVISIONS', 10 );

define( 'EMPTY_TRASH_DAYS', 3 );

*/

/*

Plugin/Theme File Edit

define( 'DISALLOW_FILE_EDIT', true );

define( 'DISALLOW_FILE_MODS', true );

DISALLOW_FILE_EDIT => false, diallows logged in users to edit theme and plugin files directly within the dashboard.

DISALLOW_FILE_MODS => false, stops users from installing plugins and themes from the WordPress dashboard.

*/

/*

Force SSL (https)
define( 'FORCE_SSL_LOGIN', true );

define( 'FORCE_SSL_ADMIN', true );

FORCE_SSL_LOGIN to true forces the WordPress login URL (/wp-admin or /wp-login.php) to use https instead of the insecure http.  

FORCE_SSL_ADMIN to true forces WordPress to use https throughout the admin dashboard pages.

*/

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
