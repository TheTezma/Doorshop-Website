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
define('DB_NAME', 'doorshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Hh3bda_A]#[g[rFMp3$7MPL5dldd2>02R 8+%_Y%d4WR{f@nCrd8Nu|<c{sLR3<5');
define('SECURE_AUTH_KEY',  '|@^!4Ox<E:r(|T&G/D8iVMKoaM/mEmJFCj2j$](K%,6q7&D=)y6494bi?)Dz(wzB');
define('LOGGED_IN_KEY',    'mPC {X.UE>.UV|[D->/u~chM&]jn`rg{~K[OU/q:y6:hR[MdAHq$3#[?GW/2k[Xj');
define('NONCE_KEY',        'T&41j,1B={_1(UVL#gYm~px*G1`u:+K+pFD6s-!HM(vG4Z}Bz|[Q-FsaTik#),[Q');
define('AUTH_SALT',        'K<zWT2n8)`[RK._)XlW`>I@bw)^KHm>dMkjEzF+lh*+Ey/nE7Ja1Z|zY?XR/1nl{');
define('SECURE_AUTH_SALT', 'jSlqs|^SZn-=9F0S`@_6N>7]]p}E]#U37cKgQ9 r)IBK f:rwnwqUH1Y+}3E}@*1');
define('LOGGED_IN_SALT',   '|.6.2M>_Fa!G+bz=@+F7Zgf9,L!F~&{DJN).$7f)>b^]:F8|]^0olbnqI*0=X}V`');
define('NONCE_SALT',       'P0TiwC{)yRMIBYhim5+VygfO1,H-9{M=IBcd,t[FtsSnCn(UO,WmXKLq~RgLKwCQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '153z1_';

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
