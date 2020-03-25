<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5rsB5WO9BIbcdclHWZt5g7mJ52jphBzOwcZa1ZUQUqHxJRarI7zLc6YKyztXmCTqQqlMuulvvObFGuRGZwNwGg==');
define('SECURE_AUTH_KEY',  'kFlR2Aa9k5zInyCV7ILyMF6+O6wGq1DZJQ3xHVqA/G3R9OUddpSi8PQz8dbeoMfu3Z1esP+dtv+FszrgVQpeEg==');
define('LOGGED_IN_KEY',    'HGSHwCKKonU+MF383pUfPdKS/yaPpJ6qs5zWHJOfOr2e7qvG1bxNlE7VH7bP2jSMbGuD2BT8/zaAWIAQNH1Tfw==');
define('NONCE_KEY',        'srGQmqiHcd5641AXUkjCpxWVgnEWhfpBvH2IAOZkhTJgZWn6cRiO4UvJPvEvC+JUDOBfrJ4FQ+ukuy8ScKfNkg==');
define('AUTH_SALT',        '2h+evtUadTsOpmskwXsjqOd31m61ephPDvGS2CuSKBN+cmFobZNMgDQMZT3YLozbmb9O+zAT8IOcmO9sjYk4ew==');
define('SECURE_AUTH_SALT', 'Tz4rpIWdYxP5IDcwrW4QQzgvZSXz7/t+3jnmxBS4i3KXshkzMz1dnIuP5VTfdOqj1lQRrvGhh6lA/srESwuCqA==');
define('LOGGED_IN_SALT',   'bTzeAjDEV5W8lTNmAuOI87mFLEGebXMuH8Qs5bjxySYEJ27CDP8nL4XvLydTiGDPTc4CtS8A8SIbng3a6d+Z/Q==');
define('NONCE_SALT',       'AK2BdftUNhuNWIRUVYzfnESspo0Edm/NlWr4I7iSIjfQkUk65lxKpaOs/o8NyqnWjTUbk8yxzypMTnuGCF6khQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
