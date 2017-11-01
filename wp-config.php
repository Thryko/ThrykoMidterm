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
define('DB_NAME', 'midterm');

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
define('AUTH_KEY',         's*`LxgK#q.(!i#wN+-comx=GqZZwI2<}+Qm2E(2R!UjEMNRImXG}% <R>dzKIBx!');
define('SECURE_AUTH_KEY',  'IUc0>H&,}4_RVI7u$H1=j-QX}x^|M}5%A7EyTHUQ?x,$ahi.C2#40lLGk)!31v[0');
define('LOGGED_IN_KEY',    '..&zJpm%h+YCVK-,qxg>zgIlIkA}2`%{W]3dU=q)j<ir+I</ZCAa#8u5ooXs1V3j');
define('NONCE_KEY',        'j5BXuhMG8SkQ_Y-4=CI/nK``Vpkli_yg3XgsWg`A3=.8ca!q=laU@Wh!K8HmuhR2');
define('AUTH_SALT',        'xaFxVy+BlSW5],YYy_1p5v6L<t;v^(6mj4>5l0)/JA>qn+{nU9YoOYt*0>_8+w+w');
define('SECURE_AUTH_SALT', '=9?jYHLq=oe8M $?X$}T0*2jPO7EY?e*ZTZbk>aubab}iZEn*FRX<=L<IC6N>jIa');
define('LOGGED_IN_SALT',   '2S<iW~148T25}S%HP9G=hh+LFPw*?VsI(~}C}1{mx7fJK;:&@f >E7B;Qbko|`,@');
define('NONCE_SALT',       'xW=!4K2d95nK@f,j4P,kT9w7>2!x2pf(9IL5n?0=Q&tu?=i1/PKZG`9#g?qh`%Cb');

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
