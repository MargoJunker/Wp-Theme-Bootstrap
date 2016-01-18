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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'B||v?Rl7p#7eN>%$XWA)wZpn?ED>*}!UG4_W!`Heo`ylIB;3Sj6i~K97Ct.++I}w');
define('SECURE_AUTH_KEY',  '$A@Ey{Z`44j$F0b(C{TX-6J|uU-po(k {9=-25v=lSEb=-XS4rKdbN-Pc[>&`Oy3');
define('LOGGED_IN_KEY',    'A#y?vgZ3:@L}RxVDdg5%TT]x+,,*u_dk;[d8+]Iw 6lZ%TYO9idb7n<Lire:x7r!');
define('NONCE_KEY',        '.B--^?qLxLcZV~S%HJ/*F_-CJ0`~SE~D.S]x>]?sVHoMK,{MR8n,yt)=9oG!c@p6');
define('AUTH_SALT',        '293|>Cqlw3#{M;ch*Xb=|TFIG;JWn~,ts1Ne+-`T@O$1id,DaMtYuj!1g0A5K>J4');
define('SECURE_AUTH_SALT', '%yL1Be/gli%JiKB.jqbNR(6}KH+ZSUW$-/C&af]lP@vyq6F|N x+ij?oa95dfb-y');
define('LOGGED_IN_SALT',   '%/PS7$,s(%`#f5LE (@!@8O]?yB ;Ye5O:t5nyVi~I)mDdhS&[+m*#W-d]3$nmQx');
define('NONCE_SALT',       'J7<bhu1RPUAi)-m`%Mqj;2!iVq3!1njD4K#p2vq=ThROs|r_e!m /%u~48<%C21P');

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
