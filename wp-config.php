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
define('DB_NAME', 'getnailed_db');

/** MySQL database username */
define('DB_USER', 'getnailed_usr');

/** MySQL database password */
define('DB_PASSWORD', 'eluwa123');

/** MySQL hostname */
define('DB_HOST', 'mysql.ingenslk.com');

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
define('AUTH_KEY',         'u^=Iah MfCQ%{_>K$Q(LDxl|-5uuL(|)mG[Oi|X8&v/3IHz-(j|mQt[!6BjEyP_W');
define('SECURE_AUTH_KEY',  '?}*&}-%![P+7[{.CPEsFPj3q9$+1b.|.SR_dBY-#cIx,>ff-hE,A6+R_22&eGoW!');
define('LOGGED_IN_KEY',    ':FF+v*4zO_r/-~1+|Pb2?+eR<2!R&_YJf|y[nz:Iw:hn`sYH{.kIra=i8>Ife[K1');
define('NONCE_KEY',        'Ld{bL{FG;bcrFEQS(js6 {iY|Zn2oko_(oj.<HFj]`g)2hR3E@z,AYx|2TE-B0&|');
define('AUTH_SALT',        'R{xXWm )s=wl]YOZE1n7.Bf^2.<y:bY3F!}l>KWwYPmbLb`%+,8y@OK)}1]xt:|J');
define('SECURE_AUTH_SALT', 'H4t2XCuz?q<$O`g-+xKy|q3&;d-+,#_;wEgTep?O.5>aB0%*;>w9Y4_gx9siM<e@');
define('LOGGED_IN_SALT',   ',dQZR&^Sp%EE8Cm;*HHjg;$E1M4+Z@9/!f(27_8dwib9y-4Yu}gdjS[t,Qz.*Rcb');
define('NONCE_SALT',       '?6b+T|X+zA2Q|-4- (AO?1Gjutsd#pzMw!@.7RfmgV5.){=J]Sn,e_Uv*bL=-lb<');

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
