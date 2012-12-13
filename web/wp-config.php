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
define('DB_NAME', 'innerbath_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'c7JMRK/nzNbb.*3?7Jo|0o$Ex(LRk0cPAW6Hb7z5QM?|x#j@iWA3 jQ}rl>KIE=?');
define('SECURE_AUTH_KEY',  'li]J_{HxTqV1?$2/!1b9T^XwiLH|06YfPOLYZL|A+GcN+C#J_L-T-ggz,|]2bKmR');
define('LOGGED_IN_KEY',    '.i9sL-M}co$^W}=Am?MjwK9,U-8|`-xmgz=M_-8B>^eDy6!JB0]O/X)3:L[p,Y#A');
define('NONCE_KEY',        'nR.g$-f3xSU**T*P.dF0@d%2:#S?S5IE^:=T:eA..C9h|g}v7JBM2m<_+#pk74p3');
define('AUTH_SALT',        'nyGO0={?BeWj3_.BH|^-gGTf,G]  /<*!Nh2Y-cN&&+)UB#V Iz:BiyVy;!D&:M[');
define('SECURE_AUTH_SALT', '4g.XFu<E+H7t~r,?Yy.DDYw/4PX%~]SGIIuTFHcj+X`PEQ-786oHi#+9%3~..[z-');
define('LOGGED_IN_SALT',   'Hz]7>CUzeZ:Sf-4K-AsQOT9LGMG>!g<25_V[E!b<+r4P<-~}a]=T<&Zug+82k807');
define('NONCE_SALT',       '2qUrl_bBC,FGS+)EzltP@kb2|p =$I,D)S#)vXw>:o&TJPpU~zVm3vP$)_1l!W-a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ibb_';

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
