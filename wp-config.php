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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
//define('AUTH_KEY', getenv('AUTH_KEY'));
//Redis
define('WP_REDIS_HOST', 'redis');
define('WP_CACHE_KEY_SALT', 'wp-docker-key');

//define('WP_REDIS_HOST', getenv('WP_REDIS_HOST'));
//define('WP_CACHE_KEY_SALT', getenv('WP_CACHE_KEY_SALT'));

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'DB_NAME');

/** MySQL database username */
define( 'DB_USER', 'DB_USER');

/** MySQL database password */
define( 'DB_PASSWORD', 'DB_PASSWORD');

/** MySQL hostname */
define( 'DB_HOST', 'DB_HOST');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'DB_CHARSET');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'DB_COLLATE');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9a207e0369f80a4d72d80f62d55346fe7f8ed7da');
define( 'SECURE_AUTH_KEY',  '364b8cc978ccff1d3f2c20e70f95e20f3f7c9485');
define( 'LOGGED_IN_KEY',    'fe744ba94d52c4c98867fcc9640bd4376e00cda3');
define( 'NONCE_KEY',        '7784fbeb55446ab4a334c04492e94465efa8907c');
define( 'AUTH_SALT',        '0dec9dc5f06ef9f009e5eedb3d89204f3dd0f1fa');
define( 'SECURE_AUTH_SALT', 'fc3a3ed7da7692c7bd7a69ba0221dbedabd08cad');
define( 'LOGGED_IN_SALT',   'e0062c4fd0a76fd5cb22d7d0a61a5547b04dfd8f');
define( 'NONCE_SALT',       'a00a66b2cf64bca14e09b79c378ca85a9c87022b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

