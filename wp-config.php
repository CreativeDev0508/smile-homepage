<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'smile_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nr>])y2$+ZLbFd/u=YW`^W[;;2N9MXO0DL2{Ur7NFC]!eU[/{o3pUM]Bu)%9mt~u' );
define( 'SECURE_AUTH_KEY',  '_S+?N{}[pINkmJHjdMpvXU L@Yt2~#{#X&>~iaz4Zw!!?D1p>%#U114;-g+%GR)W' );
define( 'LOGGED_IN_KEY',    '1#4Ppk{R}H?//J)0}K_x MwydFb4.)xOzIt1/:wTa#3pomQ<FNM=-;v)gFmKJ3T{' );
define( 'NONCE_KEY',        '>!FK~4lP&Q,DF.]WB0zDmHIdJX`Jql!yJq@i[OdfR1$Po+CKCK%PGIm>09>^Q:$x' );
define( 'AUTH_SALT',        'L)F:v](x{Wa<Ufq#e*hx.Q?}eo(f #x;B_Y]`#DG}buyep<^3+s@I~o]C(4Xn%T`' );
define( 'SECURE_AUTH_SALT', '8n*(n^i+ACJ&q(lJx7ZZBPFhoL B%jO00^k.V$rH^YL3`D.dZ[Uce:Evs$qj~;jE' );
define( 'LOGGED_IN_SALT',   '6VEDk]b[$VT~Bjdyx-LTlQd]VXbJ-N-bYo3wpn#-)&UFFMevTr*8L%kS:Ru@!IPE' );
define( 'NONCE_SALT',       'D71@.|VEq?GeoAk4rH VB9eWvqSY&0*8PTkD1BySID3[}E{3:@M.;BV6|)_,z!*^' );

/**#@-*/
@ini_set( 'upload_max_filesize' , '1280M' );
@ini_set( 'post_max_size', '1280M');
@ini_set( 'memory_limit', '2560M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
