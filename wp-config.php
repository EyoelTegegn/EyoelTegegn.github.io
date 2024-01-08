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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'zVOi*~h;6tn/3$=Q^++vMVj}Z[iJ:Y]I,fFJFM77?YYEOP^8aa/J0I>fr-m,F0kf' );
define( 'SECURE_AUTH_KEY',   'rl1X( m$%wz7BFZ@ i]`=e)~urwAIO39PVFQ00bk]^gYuP!O.sVdZ,d3!wcO(*I:' );
define( 'LOGGED_IN_KEY',     '~)7Z41;xT l6I0A0FSlK){>msu[ 6`BXlHBN1Zr>r>tVh;$#]B#V;V;F!O`xJ3:y' );
define( 'NONCE_KEY',         '`m_ut#r!C<t?@r1+o&3<-wer(E5@Y_@a$=D2f;OjU  ZvUMSmg_09s$,@*rF{@`V' );
define( 'AUTH_SALT',         '[|(GOD23JB[vRSnr}SsPW|G>.GFB/io:gVB[XdMtL1|W} 2#}6wLRif!$?r]~YM0' );
define( 'SECURE_AUTH_SALT',  '8>8z6r|aCRrU:}P;&=qP@%,`UrBA3<V6]v_A8fv.f4KqpC@t![no3a5cVqOX@K$=' );
define( 'LOGGED_IN_SALT',    '7aD($RDTh2+1TNXKhx^/pM0M]%sMOA7hEmf brYVv:Lr^xNvL>hPhYu!jdvv=*j-' );
define( 'NONCE_SALT',        'G%VqwvW#F//sS>%lsr2Xxv}5K] >yxTM%T<6b)+Os3-wJ3hd<*3ku^j vi!7>p]H' );
define( 'WP_CACHE_KEY_SALT', 'tvDQW@]Iq;m+] dH~fvRIhYEochd1-I/F`{[>S>C@7oyVm7MXop5m&vw6#qJwuy_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
