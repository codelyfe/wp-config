# wp-config ( WordPress - 6.1.1 + )
A wp-config.php created for advanced users.

## Forcing the site to goto HTTPS instead of HTTP

````
define( 'FORCE_SSL_LOGIN', true );
define( 'FORCE_SSL_ADMIN', true );
````

## Turning off the ability to edit Themes or Plugins
````
define( 'DISALLOW_FILE_EDIT', false );
define( 'DISALLOW_FILE_MODS', false );
````

## Advanced Debug Settings
````
define( 'WP_DEBUG', true );

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

define( 'SCRIPT_DEBUG', true );
````

## Changing content directories
````
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
````

## Set Memory Limit
````
define('WP_MEMORY_LIMIT', '256M');
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
````

## Another useful wp-config.php I discovered after making this one.

https://gist.github.com/MikeNGarrett/e20d77ca8ba4ae62adf5


## PHP memory limit for this site
````
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' ); // Increase admin-side memory limit.
````

## Database
````
define( 'WP_ALLOW_REPAIR', true ); // Allow WordPress to automatically repair your database.
define( 'DO_NOT_UPGRADE_GLOBAL_TABLES', true ); // Don't make database upgrades on global tables (like users)
````

## Explicitely setting url
````
define( 'WP_HOME', 'http://domain.com' );
define( 'WP_SITEURL', 'http://domain.com' );
````

## Set url to... whatever.
````
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
````

````
// Set default theme
define( 'WP_DEFAULT_THEME', 'twentytwentyone' );

// Temporary for causing a site to relocate. Remove after login.
define( 'RELOCATE', true );

// Allow WordPress to update files
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', ( 0755 & ~ umask() ) ); // change permissions of directories
define( 'FS_CHMOD_FILE', ( 0644 & ~ umask() ) ); // change permissions of files

// Set the directory files should be downloaded to before they're moved.
// This is usually set in the PHP conf
define( 'WP_TEMP_DIR', '/Applications/MAMP/tmp/php/' ); // this one is for default MAMP setup

// Content, plugin, and template paths
define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' ); // Full URL to wp-content
define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' ); // No trailing slash, full paths only to wp-content
define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' ); // Full path, no trailing slash.
define( 'WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins' ); // Full URL, no trailing slash.
define( 'PLUGINDIR', 'wp-content/plugins' ); // Relative to ABSPATH. For back compat.
define( 'WPMU_PLUGIN_DIR', WP_CONTENT_DIR . '/mu-plugins' ); // Full path, no trailing slash.
define( 'WPMU_PLUGIN_URL', WP_CONTENT_URL . '/mu-plugins' ); // Full URL, no trailing slash.
define( 'MUPLUGINDIR', 'wp-content/mu-plugins' ); // Relative to ABSPATH. For back compat.
define( 'TEMPLATEPATH', get_template_directory() );
define( 'STYLESHEETPATH', get_stylesheet_directory() );

// Set post revisions to something feasible
define( 'WP_POST_REVISIONS', 15 );

// Autosave interval of post revisions in seconds.
define( 'AUTOSAVE_INTERVAL', 160 ); // Seconds

// Set cookie domain for login cookies
// Very helpful if you're getting cookie errors during login
define( 'COOKIE_DOMAIN', '.domain.com' ); // Domain and all subdomains
define( 'COOKIE_DOMAIN', 'domain.com' ); // only root domain
define( 'COOKIE_DOMAIN', 'www.domain.com' ); // only subdomain

// More cookie constants
define( 'COOKIEPATH',  $_SERVER['HTTP_HOST'] . '/' ); // You should set this explicitely. 
define( 'SITECOOKIEPATH', $_SERVER['HTTP_HOST'] . '/' ); // You should set this explicitely. 
define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . 'wp-admin' );
define( 'PLUGINS_COOKIE_PATH', preg_replace( '|https?://[^/]+|i', '', WP_PLUGIN_URL ) );

// Cookie names.
define( 'USER_COOKIE', 'wordpressuser_' . COOKIEHASH );
define( 'PASS_COOKIE', 'wordpresspass_' . COOKIEHASH );
define( 'AUTH_COOKIE', 'wordpress_' . COOKIEHASH );
define( 'SECURE_AUTH_COOKIE', 'wordpress_sec_' . COOKIEHASH );
define( 'LOGGED_IN_COOKIE', 'wordpress_logged_in_' . COOKIEHASH );
define( 'RECOVERY_MODE_COOKIE', 'wordpress_rec_' . COOKIEHASH );

// WordPress debug on and off
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_LOCAL_DEV', true ); // Magic switch for local dev

// Script and style debug
define( 'CONCATENATE_SCRIPTS', false ); // Causes WordPress scripts to be included separately
define( 'SCRIPT_DEBUG', true ); // Uses unminified scripts
define( 'SAVEQUERIES', true ); // Requires analyzing the global $wpdb object.
define( 'COMPRESS_SCRIPTS', true ); 
define( 'COMPRESS_CSS', true );
define( 'ENFORCE_GZIP', true );

// Disable WP cron in favor of server cron
define( 'DISABLE_WP_CRON', true );
define( 'ALTERNATE_WP_CRON', true ); // alternate method of firing cron in the background when initiated by end users.
define( 'WP_CRON_LOCK_TIMEOUT', MINUTE_IN_SECONDS ); // limit cron runs to a certain interval.

// SSL
define( 'FORCE_SSL_LOGIN', true ); // Only secrue the registration/login process
define( 'FORCE_SSL_ADMIN', true ); // Force SSL for the whole WordPress admin

// The "timthumb" fix
define( 'WP_HTTP_BLOCK_EXTERNAL', true );
define( 'WP_ACCESSIBLE_HOSTS', 'api.wordpress.org,*.github.com' ); // Only allow particular hosts in

// Modifying files
define( 'DISALLOW_FILE_EDIT', true ); // Kill the WordPress file editor
define( 'DISALLOW_FILE_MODS', true ); // Don't allow users to update core, plugins, or themes
define( 'IMAGE_EDIT_OVERWRITE', true ); // Allow editing images to replace the originals

// Changing WordPress updates.
define( 'AUTOMATIC_UPDATER_DISABLED', true ); // Disable all WordPress auto-updates
define( 'WP_AUTO_UPDATE_CORE', false ); // Only disable core updates
define( 'WP_AUTO_UPDATE_CORE', 'minor' ); // Only enable minor core updates

// Change languages
define( 'WPLANG', 'de_DE' );
define( 'WP_LANG_DIR', dirname(__FILE__) . 'wordpress/languages' );

// Trash
define( 'EMPTY_TRASH_DAYS', 30 ); // Number of days to wait before emptying the trash
define( 'MEDIA_TRASH', false ); // Whether to allow media items to use the trash functionality.

// Dev tools
define( 'SHORTINIT', false ); // Disable most of WordPress. Useful for fast responses for custom integrations.
// https://wordpress.stackexchange.com/questions/12919/what-is-the-constant-wp-use-themes-for
define( 'WP_USE_THEMES', true ); // Override if you love WordPress, but hate themes. 

// Recovery mode and fatal error handling.
define( 'WP_SANDBOX_SCRAPING', true ); // Turn off WSOD Protection (and don't send email notification)
define( 'WP_START_TIMESTAMP', microtime( true ) ); // Modify the WordPress start time. 
define( 'RECOVERY_MODE_EMAIL', 'mike@example.com' ); // Set a recovery mode email.
````
