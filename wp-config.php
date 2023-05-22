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
define( 'DB_NAME', 'wp-site2' );

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
define( 'AUTH_KEY',         'cYz|8{5*1Sw63c nVc-8I@-qBL~QoPdfV7O-M$UY{+_<;+6t!,0xq_^_/[}[.Q?l' );
define( 'SECURE_AUTH_KEY',  'cO{PHhp8kXC%/fMKtB@*Fp/4]4j0r7I2?.1`4(P<5vky;e~^zl}jID!c(9^1IXKr' );
define( 'LOGGED_IN_KEY',    '/QcL>1vpy4a|hi%*&;P)O^E9H}f|.MVU:%Lxg&4TisA]mB&6+,e*6_N8X5dJwI*%' );
define( 'NONCE_KEY',        'O(e~nE|[!0mIx&A9qaeUGqzS:6&*ZR(I#i0KZ{Hd/(igaL=>@UMxz>~SbF1BW+4H' );
define( 'AUTH_SALT',        'MWq`<eE3&0)(1?M}f;[&;Xx)9q|CrB[DTd]NCCK*InC3!*l(5|3,+bjJ&A}_AM5u' );
define( 'SECURE_AUTH_SALT', '={rq[@Oaw@F,zfnb&]:PlR{pF-s>$5K4hqq$l?(1zB&fp5z;UC=pjAM[CBxa;)%P' );
define( 'LOGGED_IN_SALT',   'Snt+`uW9*lRx_&}Y>H*a$ZZ7{wn?;OP@LdN(dGDtK7,bc]~ $k%f6-7(Pv&5!q6#' );
define( 'NONCE_SALT',       '2yJ 9~CIWQ_0<ry{;.mQXM?4~[P1}Y_g@$Mo4/#y!):<f jq9[JBbyw:fAh;{w(P' );

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
