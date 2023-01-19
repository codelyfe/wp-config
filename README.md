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
