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
define('DB_NAME', 'try-wp');

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
define('AUTH_KEY',         'qx7gRiF4_a91Ms9v@L!i>g=(q{^8T BSJZCmn,1u0h-QR;`6k-c@*P5 2 %taay[');
define('SECURE_AUTH_KEY',  '75lv~Bxx%~knyK=ti`PI<l2oK,q_3bK@5Q<|pjVktGzG=xhU/}]0i+!Jw2u<G22/');
define('LOGGED_IN_KEY',    'o--9(0gtCp*Puq`,e2Y*u5iZien7TOcA(j-b!LF8:9cP:jtTW|Xi!]u8:1$FO:x#');
define('NONCE_KEY',        '}a+X_bx9ERctJZ/f;U|ZP^/}. Octz<?r[m-lT>wTB:&@Q!sVBL^Y1c#Yw%A#aRM');
define('AUTH_SALT',        'L=OLv~(%jc{~NuEk%[^V_uEMs3s)#v:<o{ l3J?Z&TD3Rib[M1;+`ce$<oiZ.f,g');
define('SECURE_AUTH_SALT', 'bduye=P#IvXN!^f Y_bD]+imFQa1?,{:T.Jpo}OHObR|LRoc,!uax8DUSGa`  L6');
define('LOGGED_IN_SALT',   '0xwVL`iSjFsaSzXCKK.zJHQtx~u1g(uK.Bk,Y2#]He/w9*QgOd@+v;T@vR]6k#7H');
define('NONCE_SALT',       'B65R$>OL#hN!?]EWl2:u!T1Aurg P@gDV]I)ulN<s4vkjSV=_G=v,i{#gGJq*Jss');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mw_';

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
define('FS_METHOD', 'direct');