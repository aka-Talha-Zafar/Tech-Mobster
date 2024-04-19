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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'zGE@ErEm)Ez?iuAs(lsTOuQD1|`wPwz9t?WzVYwNhFD)d2Xm iXIF0f7at8Q1WZ6' );
define( 'SECURE_AUTH_KEY',  '9 L}vqEw%pL^IN*gJ/n!+nHcw+nA}LJItV%!LUT;~+-Uy*xgzWxGX**;vpledKLV' );
define( 'LOGGED_IN_KEY',    'z)sg`IH5Bj=ef%pDHjGj&qP)IiSE)F.q~`KmCP-!5U`TGgRi:*xFFD4fwHn]0&8[' );
define( 'NONCE_KEY',        'w>MBdB9]5Z=Vj4K6AMK5-Cs33yrJg#Q^QTEcb.9&Axsp;mUA6Cf1<YM[q>9ZQj=&' );
define( 'AUTH_SALT',        '?O=hPrSxNT9Xd,0fhcOe&9^u*7rl.]z75Hs,Z]A,-A}zmX|mO1>(es2WK7w^Oq)$' );
define( 'SECURE_AUTH_SALT', ';Jz[p BVyJq&JZ5JxNAx]g0!{GVH7iC7q&)f(N-*;UC7gbEOL)IN%UxL48F3.#cI' );
define( 'LOGGED_IN_SALT',   'OHAr|UCMNiKHc}n)~Hcv[]g]@c%w1phy?{DeblSO7ws%y*FU|]B 6YR|f(+R+8Eh' );
define( 'NONCE_SALT',       'Lp8lz5Iw8Adg2tI/Q@PvpQ&D#Yn;W WU<Egc>DH&sUD3zh/T<Hd9;LLpP^#[LM+|' );

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
