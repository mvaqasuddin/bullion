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
define('DB_NAME', 'bullion');

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
define('AUTH_KEY',         'O&4k[%21rfmvH>7|f b8`rX{wRT[05-& E7-D|w7nw}p|X94aoV}iuzk*R.m_<wG');
define('SECURE_AUTH_KEY',  'yiAaU S+}gF]D];I{AD8>mk0d%fpGNyYA:d,o<AJ(Vmjkbs@?AX[FaPK+4<_E-=1');
define('LOGGED_IN_KEY',    '[|!bKvu@@[g@H +UL7LPt:D-M0xi%Xt]D-2A^WfBrn+GQm!h?:l{ 8}Ct~e74~E&');
define('NONCE_KEY',        '|w|;b8XKPi?&Vm}8-GaW}ul90#W[y+C52(GJt+o$mw/);T`E-|b4&-zh#5QIe|@|');
define('AUTH_SALT',        '?@=[m+=&&S,89 9`Q4b=b] 9G}BZt=ao|JPWB[+h1sJ2 *i{bk]5sS`p.{;^dX8P');
define('SECURE_AUTH_SALT', 'FSNy|UN+ltF&E<=)ZhP,kVZ{BYILqUPu~<-X0Y8T7-t{,-{70wq%sc_QO,=,/:6[');
define('LOGGED_IN_SALT',   ',}+x[iB?$~5n){6})p~;|6|m_Z{|]fa+|mh$7p!I;?;ht]$@v-@q5:i&-ff{UMU:');
define('NONCE_SALT',       'i]I*_9A^J*|WnvIw3ttW8_}gBrr5l>cAp(Q&6C25KkL3+o{tn*NuPzvpd=h5jZ_A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
