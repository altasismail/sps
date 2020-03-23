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
define( 'DB_NAME', 'spsp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(w(s,@TfmB*Vr<^z:%47mR_1u5SKWGhX|e&HUC@28O00Nn2_)@fvG@W)6xc=tJq{' );
define( 'SECURE_AUTH_KEY',  'jpvJ<5?7dUE:_:!-!$P.Z{seYh6,O !mJZt,oOGw6Tsmii4X5Q:<{Yfb[P_ VLKj' );
define( 'LOGGED_IN_KEY',    'I$~{a03A[G^QEXEF70nq0QD F0z~Rv!=E;@Q.}zRJYIHzbomZ:gZ/@;Mv6)$}9T(' );
define( 'NONCE_KEY',        'fr`$(Pa#wP!feO7!@%ei2vuM7ZY99]PyW?LCAn?i<}R0@YC,lV[*(#-VQezwf-9j' );
define( 'AUTH_SALT',        '(B.CE@a~t36X6-h3j?#&Zjymbp1g{pe2>bDHo,oTabJL X)!>8c#X6<rDDyLP6{@' );
define( 'SECURE_AUTH_SALT', 'hUhv^-t5(.K&vrk-P,d6A6fr?<YzkCC bWG3-r|IzHH{5#3*p<8;Ce@GF3S:o,h+' );
define( 'LOGGED_IN_SALT',   '>P -EDy~;np<2MHNM$DO>G]f1&vAenhx2O]Co88=*>8i=HPl3AMAvcjMLfRD)>_b' );
define( 'NONCE_SALT',       'Go3^Z&M(^?=@glufVpr8j)i<q9?G39sHULj[{{<!5<c^>{h)EoB1kc;:&po~!s%3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
