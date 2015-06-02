<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'robbsblog');

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
define('AUTH_KEY',         '&a-F;&(44|wJ+WJt4vxvK2b,v*M{-QWZM(/F&p0$nM9ODDOgdFpeDv]z|aw|KXy8');
define('SECURE_AUTH_KEY',  'd.NiJ..;]~g(,+L-GC|-P!uya<~@mq^^o)&35m>[Xa(h1J#0zB,z$WE-&S~|*A{+');
define('LOGGED_IN_KEY',    'w1}13]Zb)Q%5m<{E7dJF/c~kU>zBEb|@af+S_RUo%+_zZR<Idoc U89Cw_fzge+V');
define('NONCE_KEY',        '!&m|-D-6||kK%-TYD5TsLO[Jc1_J?MHL ^|%/!lPsc:pCR|ym9|^t3@zTKGWF1T?');
define('AUTH_SALT',        '1P]j05WL 4v,jcxk[6,zJ?=KIH-PC6BJwoYDe&utT-(1KUC&tH$a:g&E/!hh^m7U');
define('SECURE_AUTH_SALT', 'm4?HZO8c!b:|!;+k=ndZ]opWvKH]/Tqq.A^ipU0 ~Q0K=76eVTvfR^Vx!sN@cJdC');
define('LOGGED_IN_SALT',   '#}*rE@[6zJ|XQ+(-:A->$ SnX<0se6eT|hr}dFHqlykP$[4NJIzpR=3e0O=|qs#2');
define('NONCE_SALT',       '$-X/Ek0W[Dydf-9C?:GV_4P/g}JF}Zw+J56ykpK+(ov=:EDjv!,{H:bfx~31c:Ti');

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
