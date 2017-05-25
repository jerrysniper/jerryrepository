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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'autoset');

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
define('AUTH_KEY',         'UNdFbh/u]1YaS/&T;NY%(`Mb,2oIE>-5S6e^XBTy^o$wJU;k9i$N|?+ 5*H`jqJB');
define('SECURE_AUTH_KEY',  'X#pMgNqap7o; Myf.71r|@;zG%X?V)Ea FxCbsQnzqPpaZ,dn6K0j6r w?b.i|t@');
define('LOGGED_IN_KEY',    ':_MBotwZwD(ev`:]=#X=J~Q?(idyLfx/`5LwuI9Uh=YoUMKvL+Xjm<R6;W@2[t~X');
define('NONCE_KEY',        'hL5-(ODV<U?5;r9VIC=t|?vMW]M7f^VffnqKmu<N^cJj.y1s)3>CIt*RJlr,p{(V');
define('AUTH_SALT',        '*z1//f5k46Tnv9c68H&6AYE D#h(DX@DI<flW ,y~BDl3}UhkT)pW b#U+dC]en?');
define('SECURE_AUTH_SALT', '56sgLo6NoDWx,@&Yz#bj>OZ%^&t3|yTnF3XEhs3o(<G[.ebni6W%r,CokU~ZSn._');
define('LOGGED_IN_SALT',   'V`_A_):b &g9ZA$u/U43|AoD2V`%Q{cmd8|9(dI{bE8)x?6Y]=i(?1@bcKcbgD{H');
define('NONCE_SALT',       '9sFE%<G{>$[F6!_hk$iTv,ZK<UD%io^vvl *$2p<G1@-tds?e%;>.HK]1.|)vr.9');

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
