<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '2002' );

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
define( 'AUTH_KEY',         'PLb:`@?Uz7(`eG(`$cc,da. L0YKZ``$1Is,D`/pz:t{|Q]]m/D&PG4q[7rSj7ll' );
define( 'SECURE_AUTH_KEY',  'Bm^*}/)=?Hd E@pfcR!z*X^;nxaz^>E[f:vWmVbcVi%q+&)]wMaL=~fHJh(L.%hP' );
define( 'LOGGED_IN_KEY',    'Y{(ihiZz@2%>[cpNc>bRTjvH3WAjPU458.>=xa:%r}x;R;aN%$*O1F+R$A$>(7sr' );
define( 'NONCE_KEY',        'Y<Q IMQd,,/O0MUU*l.|jwT &FLc:!116z?Mq!D* iV5>j%to*Ytc->$ZV.nI[p7' );
define( 'AUTH_SALT',        '&7`.FAE1~hx_c0g2fY}I2ov_k|1n8@y-7G2MHvh$FBPR@}zAd^$m/]<+iG>O?s7h' );
define( 'SECURE_AUTH_SALT', 'aqX2BZ,Kg>;#w`(-M[^g6WMgbgX^fM#|/@-ZbnC}ftY/pbaB(|}EB=Z@}7-#+-Qr' );
define( 'LOGGED_IN_SALT',   'i%@Z=%x0VHa=n`a&^`bGk`4D0X*{$ZGTE,}QeVY(b6K9J;0e?SGo=tQ[ENULsvkG' );
define( 'NONCE_SALT',       '_7Xr,5B}79@b)W=bjcv3T|1#WZ)SG$%E dn| 0&/z$Z[{JSXgu>{,WdORJF{0yqR' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
