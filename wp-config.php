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
define('DB_NAME', 'asianblu_db');

/** MySQL database username */
define('DB_USER', 'asianblu_user');

/** MySQL database password */
define('DB_PASSWORD', 'lv0TVQuB,K9c');

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
define('AUTH_KEY',         '[mKLC*Ybk.[R+X~G:E4 /J_*rl0VXs,f^EWf/@,Zwj|`J-JHre$8ttrQy$4A4O$M');
define('SECURE_AUTH_KEY',  '|Hk#U4Es-ueL*RWnE77@S&LX3+(jg+G>8&_;w9qst?(bYz;NJ<vWd/A70*B]*<vt');
define('LOGGED_IN_KEY',    'wj4}9v&t~A/]`_U)0^xi[xIM%x2$ga-+0khLB/M}=fd9wa_7^K^6o~>X=*P&`|@(');
define('NONCE_KEY',        'z,kq@>MVm6mhYl/5<Dv%u~qQ?|TZo,Fd,2l5-aQL9,+3XJEy%lY}):GCMV+Zz}p$');
define('AUTH_SALT',        '%DM);8<Y{?.l1YI@Kr 6Jz|p$HLZ!Y%H 1f)ii^|BnbL8}% mhye3NAW(~I8[G2i');
define('SECURE_AUTH_SALT', 'ogLUcFEh i;j#8a>!$sTO}>WFPDDa/gm*76x9BnBe~vmg{t/T CU_4D%N&V,fC!x');
define('LOGGED_IN_SALT',   'dvh~|Bv5Y-!jm>6(Bg5F-Rfz>.eVy3RR/SMN2%>!IalEh#aKrK^S7I1(644xYJMB');
define('NONCE_SALT',       'g`+W!=<N7a%qJ!Wy@]q%R]hzGTuKK,(yo}{/PPoYL!bTn)CBR1pRlUGb*_<H,tSU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ab_';

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
