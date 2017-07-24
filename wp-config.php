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
define('DB_NAME', 'learningWordpress');

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
define('AUTH_KEY',         'C]BG}LDx?oEpT&pU]+q4jo.=IMtG_{,igR._N338$5?Cb#m+3!vpFi1tqT~:&^  ');
define('SECURE_AUTH_KEY',  'PCmyRCpP}MU[8J=o&c@*/Wga^f4<p+Cn,I:l[{RsE[K||P2o}=vgw J}7 YlHp1w');
define('LOGGED_IN_KEY',    'wjTadDW4]*ctng05M_(o$(!B;@ P|/.uRR&MXplTQNA2Jjsg472n)$~4XA9lSGA6');
define('NONCE_KEY',        '?AP,Yar5t|+cF]s=)LcuDUZ2lUW[ MrxeVc+]4,(}uZ/aBCb~kProox/mCgagr+d');
define('AUTH_SALT',        'smWAn0%(O9l^ZK_?<>~iHk *5]948!ra|l!8ql%{@(nOC,.%N-T-]Z<kk@sHJ^<y');
define('SECURE_AUTH_SALT', '}6N4h6?R`~%Plz@ZpewLL pBFq=CH cv[BXg_<GYJ9Oi|P$^#udNv-$lF[wrRvy[');
define('LOGGED_IN_SALT',   '{92(8)A Q4PS:DmPtvOPWAA,WRW4UVuMcvFwEX9iZK>(qeoCMKlZ`tinkHYxRR= ');
define('NONCE_SALT',       '~!KK6w#q/|ZqKw2Ij&sms+0}S xGWy)fw7|{x;r*gff$o4Y=1-M7`xYiY)Qk0z]#');

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
//define('WP_DEBUG', false);
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
