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
define('DB_NAME', 'escstunis');

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
define('AUTH_KEY',         'QZUOJ}W)u]ahg-/g_>TQi_eYlB!4Ky<hJ+RU5TxC fM3}(ZeQekTMks{!>]Mn)q0');
define('SECURE_AUTH_KEY',  '4jxXi#Vk24{?c0]K&Ybm4vNx*Xiz3:gPmhF!~<;dih,)]b+wG3,+jb34LS;GB*q:');
define('LOGGED_IN_KEY',    'LF#f~@R%S2)yGI|VMb=2:=lRzza)p_9X4gz%I2lQ:h[_v,fdVom*@Jb=?3${D=7<');
define('NONCE_KEY',        ']l+g)SWZQK!h6VKIs,}JF o,[8<Bj95Pq-Dp.PxZBHFrw:Y@kLyH.!teMFZDb@g<');
define('AUTH_SALT',        '8+}:l-;C5 gwIJ,coRLPTO[U%l;ud({,:u^iw<X.}IV$4.b+hxSgOz-S$?N5$d7j');
define('SECURE_AUTH_SALT', 'u9<Xy##,=DQQz&<(S-&x10>#;o7R?eAJn%BxD/RBER/WluXCz-z;Gga QFwveYfR');
define('LOGGED_IN_SALT',   'hb#PEX*Bx~D|D4M!Hhn/+Z<7p%4V)n%N n;(_Ym4VkgDC]V:MP-LBx2yq;ACJhl|');
define('NONCE_SALT',       'to[e1P?b%bKD7eK]2x!_mGW|piAr-)8A~c#<,!AL{i?2oSF+b0kfSnkm/2N6l]~b');

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
