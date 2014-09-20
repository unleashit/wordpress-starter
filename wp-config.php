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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'wordpress-starter');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!Gn<^P++VW`^+ABt0dJj^Al^]Av[/qmUS6%<Q?b!#p90_$lcM]8@7x;6R2--SErn');
define('SECURE_AUTH_KEY',  'Z7-YK,-X-`1@.2+i*1h;!H>6*]2y+%b!|6,n6+q8Zg_r~`o#--jFSvKEU-RSSV+|');
define('LOGGED_IN_KEY',    ')Ek(%!+B?#k+iN[|YOyKrWA}|[|Ty98k!im$*]<Oy~uxo] dPHMARQG+N7rK$euM');
define('NONCE_KEY',        'Sdtz|GLT_)O?/a#/DF]aoW/}zk+d4T[v[9Ic2i.oo)KQ7#En+qITn{GP$CF#kXRB');
define('AUTH_SALT',        '+5fy=S7Ix][/D%.!2eG1ixSSDoD3g@vw;Sn+/[jD<Kx;b73(?]AR+],=#|rNB~V&');
define('SECURE_AUTH_SALT', '`qP`3Y~Nc+.o~8Fo MiP>@-%q6]<S?#t4OP{`.1F<*~~AKuax|O5U0>iCDqRsr3b');
define('LOGGED_IN_SALT',   '?WTpI|;Wrl,.hhpY<EWrt,S9&X8>pNzt%vKoPl@dk0PU|Y2&~5%sV+HO:)v-h57:');
define('NONCE_SALT',       ')3o$8ejNxD&Xa.|p8dJ2vlpH~B-)tMlf 7Y;4D%M#lA_)X?$|C%=p9c~kp8/Y]5{');

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
