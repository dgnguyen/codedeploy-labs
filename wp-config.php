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
define('DB_NAME', 'ebdb');

/** MySQL database username */
define('DB_USER', 'ebdb');

/** MySQL database password */
define('DB_PASSWORD', 'project1');

/** MySQL hostname */
define('DB_HOST', 'wp.c5zdv4ndwpcg.eu-west-3.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c71ddfbb8d4ec5d1d76acf5e833c8e2caf533ff1');
define('SECURE_AUTH_KEY',  '459055f162209e746dd3c52be5a2744cb07dfe4e');
define('LOGGED_IN_KEY',    '834e6a7ecb9cce5afe8bd1c715a6e6ff89df5ff4');
define('NONCE_KEY',        '49fa1368028517c5cc018c25f0bca16007273385');
define('AUTH_SALT',        'e6e7d7ad386fa1fe0907d09580e3c8074d71f616');
define('SECURE_AUTH_SALT', 'bf1428658068fcd886643f90fab779995eb011bf');
define('LOGGED_IN_SALT',   '49bec9fec606875739757c646950e620bd49fc1f');
define('NONCE_SALT',       'ef2e2fc00e7f36ce01fc014c76ee51369c1debe8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
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
define('WP_DEBUG', false);

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
