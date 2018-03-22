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
define('DB_NAME', 'wp_stash');

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
define('AUTH_KEY',         '+&Rq}T`ta?X jW0zOhWg*j:9NHSDU&vNl0Lx;5u2G*hzA?xgV`^bs8N?P=_^k_*`');
define('SECURE_AUTH_KEY',  'P(m+p~K;|apDykHnx(LxYyy,AQ7V %T<FMd//p#d}LHG<&.Ro_k/n]Ow[8a#3GE!');
define('LOGGED_IN_KEY',    '(mI`cNe(*@j=j0Tk;B;wkACf%0$.=^MJJKYXPw(0VX{=yqJHbh( lg5Dt0NorF|e');
define('NONCE_KEY',        'aVDsHHI/ .u&Xpm9[/EIXgV2`o(a{egJeueas5V#=t#>v^J(E@Au&94CpPGCl:@/');
define('AUTH_SALT',        'iPd0@(}#3wBZe6$U6k>fDbT/U2:)fq{dO)zcMrXS[&jxIycq3(M4[$p1B >X~nH^');
define('SECURE_AUTH_SALT', '.ySoPY[)6j<!OkbjVvW2L`vdn<M0?xniyHE JdhQ/u>ytAo?xtX=P]i0ZUVR_OP5');
define('LOGGED_IN_SALT',   'JG.+6Xd-D[3;HgyN83NMEmvru^q0briSC$%!$[B|?TZ&3}BN:IoqE-OXPrP:V;bi');
define('NONCE_SALT',       'aevtH|Dzp-qhwz$%a+Evl5khMvA+0TDIln=::Eb[<FNRCBBXox/d-(9gObUXd}7,');

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
