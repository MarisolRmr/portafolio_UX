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
define( 'DB_NAME', 'portafolio' );

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
define( 'AUTH_KEY',         '@f?A2ee7;|u{b{Jqg#IsuX5BpN}st)bm~?WmSOnXKZAj6Y$&r0mh8uSti&2.R$.R' );
define( 'SECURE_AUTH_KEY',  '#>)pMMNpT!Bk(H:8IAvd=o2oOW@+=8wbZ:tpx/`@yRxi8g&^40OyeclY-L&1N.1p' );
define( 'LOGGED_IN_KEY',    'E lX})qz[Q$;46fRN;3Y&!BL;y@s-f=v`vIi,D]]1kyc8Ar[WW,o|3<n Ad.i 3O' );
define( 'NONCE_KEY',        'm^?n>eJy=Aki86zz_*.R|/t<g~?GjO%Vr1q<s5Yk`Rq;|^j.=IIn<yG$M@CWGe87' );
define( 'AUTH_SALT',        'p8{n8cNZPvL]]#(BjSd`VR8Lf9/srM4=nQ/vD>:XoHzOCtAh4#YDC5t^fi?@/Pj}' );
define( 'SECURE_AUTH_SALT', 'f[Mo^E_y;~aWDp72Pngk?K,IUv><ax![p+k+NN$lfWVy9zvNi4(WgagXBjQpMgkV' );
define( 'LOGGED_IN_SALT',   '&R4ol^`Rw+zN$o!!=`%YmnsFuiQc;v]6K#Z>q<{IwV]DEw|ZuF4x}*3nhddT @//' );
define( 'NONCE_SALT',       'intp#2!,#F~$Q0U.*H3v.IkAxWX=kblTCd<!BL{#ma$fP^[W=RQN3K$K30~<L#w{' );

/**#@-*/

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
