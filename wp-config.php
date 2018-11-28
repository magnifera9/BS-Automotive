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
define('DB_NAME', 'bs_automotive');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '58|[MRI[<pvy>4{T:H1nU:NAAhzZP4^>Y`]uzo]q|5-<IL:)H{U%,[KD@hvb|Y-T');
define('SECURE_AUTH_KEY',  ',]o>C:9I!Zlgws25U/U]2{ zz[qkP%N>}lq0VQ5Zal!RjZ>!arfs`lgTY;*}M(s7');
define('LOGGED_IN_KEY',    '#3;&M=9>W/W`#P)aBee?*FinOWnglS8+v]neA6gVgC0K,CfLNvI[:~5>;yZB|@^_');
define('NONCE_KEY',        'ba,Me@B0^JpnNZUVe-6oEu4VX:v9dFW/iz*DA~EAV>-~K5(aI3kBVg;Uybq4Kf.3');
define('AUTH_SALT',        'D3:)>esh5Z<Z3}FHd}6N}ifuqA~+5/ju>P/|c~BL#1(0rg0.a7 TrY8#(6+s:G[h');
define('SECURE_AUTH_SALT', '/yz2Zis[Y~=7=_SgtMs:9J0K~nIJIXdC)j!#6/+nnO6Koisx@#Ge@ygC>-+?G:Yu');
define('LOGGED_IN_SALT',   'aa$F9| GkO9dW[_@HXj-~x%A6q32lY8hkY;mLSX]]LOlQeA3CpPkA`+b5.0&>1S<');
define('NONCE_SALT',       '9`D*//;ewC`q]=>8_1xkL.JOiKJtEFycuymC$T^m7rkOKPv#x 3Fbx<=TU)s2B%6');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
