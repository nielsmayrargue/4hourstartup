<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '4HS');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'EUyho*+R6l|<e-O,8wgfNd}ykw-:Wk-bW?d7rXOY2H4@Z&XmTTne@6aKIDbh6XIx');
define('SECURE_AUTH_KEY',  '|.G04T_+Oo7YFby3BM8c+-G8-d~Uv>2e3-Jr8$L$lv1],T4a9{~;+Q-rvyO,*E/h');
define('LOGGED_IN_KEY',    '3y5?vQ8Q/oqv6cQj&I=^s1r0ku(p}Xd`f|bM7mCZB8^k*U-wZ%d3-L>2nS{@>dh&');
define('NONCE_KEY',        '-$3C)&$DEU l2Dj|*<%BR29yyF+RQ-9~XD<<w.EAt5ObTrKz$[.%YJj #yAR:%~j');
define('AUTH_SALT',        '/~o$6gToyAzn`|A8wI_=$,o!M/S/I!r7[h* &w4g]mxSEJ|*Lt[_1!Sj.Jw{9>uK');
define('SECURE_AUTH_SALT', 'RSffR9Pia@Ld46tfW]@W4.mS2-ms+oy.l(EegmK?j&qifRsMd1rzb<F>3sY8bMs|');
define('LOGGED_IN_SALT',   'kpmmr-TP$>kJf i~h!u2$|^-m;t5_S_sU&^wXRWgpkB2(RhRgtM>jeaV<H-Aa7z=');
define('NONCE_SALT',       'G~?G|E8~Y,I@Gc_~YBgH3^%4pz!_j1hD-b^s6lZ|Q6SLd`mY-75vh:l<wGl(pN#`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
