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
