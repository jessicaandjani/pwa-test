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
define('DB_NAME', 'dd9nit0tju9g66');

/** MySQL database username */
define('DB_USER', 'nbkhpoaxorubpy');

/** MySQL database password */
define('DB_PASSWORD', 'a22160c5d67fcecddfc271c13cca85ef346923b8d01ed21195c3874ca5b5492a');

/** MySQL hostname */
define('DB_HOST', 'ec2-184-73-249-56.compute-1.amazonaws.com:5432');

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
define('AUTH_KEY',         '|C&9gZ?4$&lEeDD[i*9F#[`t-(x0+fV?REL;,$`A0TGTo@],WZ)sn(AF?bA<Fw?K');
define('SECURE_AUTH_KEY',  '0=?s$`U g1oq2pVPBAGcLwTl{gwD $SEt}OsG,ZGM6(u.#hkT>N0P1Ww6E_M0d{p');
define('LOGGED_IN_KEY',    ']RX+l2k_@Jvpc%tg_8-cco1yS6W|qZ~-L1rjZ <Bq8Ge[U`A{5CD]S ?{m(6v9`+');
define('NONCE_KEY',        '(amoeN!0jYLY!5nUf!U.+34m~WSHv> lzA1f.gs8 Iz_-.$%<Wr=g};l_@2%Swtp');
define('AUTH_SALT',        'd2j{zGN*n%`E`4HhQO=/*18L9Nmq4Q^GZV4@.KT7uH_6pWd^z!E@)K&1W+FZ]16*');
define('SECURE_AUTH_SALT', 'FPM~~2k+Lr;wG1)ZPJ>D5sYHh5,+1]2bM0N9X;>f)w/jH3=FjpYAmj#E8k_Ci4}<');
define('LOGGED_IN_SALT',   'mFd6}o&;rVgbh;7$#81{X7[:1yo#U$#I~zSN,&L&U%KR;}t)<-:PvU~T]>@2n8n4');
define('NONCE_SALT',       'q1o3r8WuWr=+Vn_Q E(KIq;Sx}iG*i<5@Yl+;$gAVjkTC+{85{tfa$<pqIk<Dx_9');

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
