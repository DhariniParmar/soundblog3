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
define('DB_NAME', 'soundblog3');

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
define('AUTH_KEY',         '^Ef._mMf6O9S$|z>.EqfxCXKVMHtzv3Q4wk<7D/$K*_b0HgYw>9|d}?gtj:9)lZp');
define('SECURE_AUTH_KEY',  'a+|a|r: nYu%b_Hv6n8/VShv|C/v4<R+??RZ[]]&ID`4+`=|:2}[ T6g~qI@e7bV');
define('LOGGED_IN_KEY',    ':]qBMFm_eNa24j%]>+rg`V[0MIm[~LVZFq};DXSA:S59).)H0bwaMXubvg@P4GP~');
define('NONCE_KEY',        'um1?qEg{J0/2Gl ,OW7r6%JnWG]<;Hu*=Sa;[THR1(Wm).e04bGI9P7M>Gsr`[0^');
define('AUTH_SALT',        'jPMFzFJ_p W 7n28Ay] K@}7SqmlOK{anup+Q3:t;?73P$bB)1uqMhs$33&)NEoV');
define('SECURE_AUTH_SALT', '507`a(,|kb`qk%`2?f:biA^_Y[%F+XCA:v/`.AP}&h{U4#Mz^drvIV8W5!,NAB3]');
define('LOGGED_IN_SALT',   'rG&m#kMB0+DKA[4fT~M3nYdshI0MqK}*g4{p&ykn`Ht^Mk(h,g0E>*Ja/myuM8d8');
define('NONCE_SALT',       ',}hYMn:RRL8}n)vXCQ>.)r/c/N{e[/hgksxCG21{.wp7!FK9qtwUsXT$ft#<uQYD');

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
