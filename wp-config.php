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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'romofy' );

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
define( 'AUTH_KEY',         'eFJwfP4vvhXrsa^),8Xm;44r1#[Y  pIpRpVpB6z54TaeG$x:[Gy;0]-MuN:ns|Y' );
define( 'SECURE_AUTH_KEY',  'TT_Gq[Ey-Y(+XF<<d[&q#myGu-]{551tJ$9+uKJ1)-Z#Fy#MCh1z[J-vA`#[.5?a' );
define( 'LOGGED_IN_KEY',    'yIhX)VNmA!g91?5jF`CF(Um8z[5gfGM`.pvu#Wk(Z>-!]`m45xVV(=v]^mwB(ck_' );
define( 'NONCE_KEY',        't Pkmx=Vkqe?Wn[#BOY#gcjyq7#x~i#|Zm!+JT*[wmxTdTwl35EUKgS`3XlW<gST' );
define( 'AUTH_SALT',        '6sJL<53}5vR5]X:3Rs1K5TSRO-K%Uni$fn{pU2LSh!)n/CI)I`gP]0)#j<]o5|w2' );
define( 'SECURE_AUTH_SALT', 'g`iA(]JgxAViJ$*>}`cr:Y#_2JaP0QsmD:&M/$0}sH^!c}d:GM1l!]*S/4 i3uaj' );
define( 'LOGGED_IN_SALT',   '!z;I7}T-,!F1dn5|R`Y7/*q1`6L+]EF7}LH`$N4P|C,U.3Q$C1SPeK:ur:<8M({y' );
define( 'NONCE_SALT',       '&2^%=%6[LYy0aDx_rpgIfnZi0TO=a6,lV)TdUGEmj[J@,EDG;6gi(c4{tBG9h7i#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'web_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
