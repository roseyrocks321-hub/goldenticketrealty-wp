<?php
define( 'WP_CACHE', true ); // Added by WP Rocket











// Begin AIOWPSEC Firewall
if (file_exists('/home/goldfvju/public_html/aios-bootstrap.php')) {
	include_once('/home/goldfvju/public_html/aios-bootstrap.php');
}
// End AIOWPSEC Firewall



//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//define( 'WP_CACHE', false /* Modified by NitroPack */ );
//Begin Really Simple SSL key
define('RSSSL_KEY', '4CmtGD3cKrtI1LJOncq68TPsLJUnekqgLUBbiHzAA7MDqfxVAhwfoDQiM0dPyTif');
//END Really Simple SSL key
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'goldfvju_wp804' );
/** Database username */
define( 'DB_USER', 'goldfvju_wp804' );
/** Database password */
define('DB_PASSWORD', '***REDACTED***' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd2ywmme5qotorjmtrhng2emswowf1jpkojjsji2fxp5j0dkmifxm9ne0n5cerlvo' );
define( 'SECURE_AUTH_KEY',  'lx6mwlpknccw93lfriqrpilpiqpe4ltggtfopgu9nnlsynxjfnnsckxjesfx27bt' );
define( 'LOGGED_IN_KEY',    'gyxxx0m6ujfrixc0g4fryvontysth72ujbmkzj91fuw28wzckr10whctw3oer1qv' );
define( 'NONCE_KEY',        'd4mzeewfd7cxg16gmstxr0wc2ibqhq8oqndvyz3awhzealbe1iz8s04uvqp6auoc' );
define( 'AUTH_SALT',        '0lewmoanrhnb8walmcuiochj6u8qsptej4raccirivanqgovssmdces9rliqh8p0' );
define( 'SECURE_AUTH_SALT', 'j7rfjox98c8byqsr1b9cpmv4antf2jh8lthjylwphjuner2tltxydzk46eyuhblj' );
define( 'LOGGED_IN_SALT',   'uavpyn4clpo82hruxm6lzs0tmfymuerjiplbwxamemuc118mlrdbs8b0vdjzfjh4' );
define( 'NONCE_SALT',       'q5beqghvpemc015xu4p5qwwv1gvlvpphzjmmv6empsm4kqy3id5pyrsaaywm79ud' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcq_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';//Disable File Edits
if (!defined('DISALLOW_FILE_EDIT')) { define('DISALLOW_FILE_EDIT', true); }