<?php
/**
 * This is a sample config for local development. wp-config.php will
 * load this file if you're not in a Pantheon environment. Simply edit/copy
 * as needed and rename to wp-config-local.php.
 *
 * Be sure to replace YOUR LOCAL DOMAIN below too.
 */

define( 'DB_NAME', 'localhost-aw1275' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'tijn01AW' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY', 'put your unique phrase here' );
define( 'SECURE_AUTH_KEY', 'put your unique phrase here' );
define( 'LOGGED_IN_KEY', 'put your unique phrase here' );
define( 'NONCE_KEY', 'put your unique phrase here' );
define( 'AUTH_SALT', 'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT', 'put your unique phrase here' );
define( 'NONCE_SALT', 'put your unique phrase here' );

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

define( 'WP_HOME', 'http://aw1275.local' );
define( 'WP_SITEURL', 'http://aw1275.local' );

define( 'WP_AUTO_UPDATE_CORE', false );
