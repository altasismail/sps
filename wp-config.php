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
define( 'AUTH_KEY',         'm*C*0~lEtyF-.BzC5K@C_t2)L{Vm?)FK+(sQX-#fib6S6=@[#ok;]jbrKP,ii(Cd' );
define( 'SECURE_AUTH_KEY',  'u;iyUoNQhsl;ytPgJXRAx3/_E$@;pwa*L+82}v$XBpc]>;+|:9(e[Yv5;=S9DMQV' );
define( 'LOGGED_IN_KEY',    ')Mc_x*nD<px4O*v(e`K>Gx&O&/5y?J,)<e>+ @e8/-2RP]L-;#-,rr2[wbp@w1:G' );
define( 'NONCE_KEY',        '9&*]a1c|NUu{6xcek5(={1#$+B]W;0G/64>?Rt8HTc#Q&MgE!O}D!G{TmnLXi:~G' );
define( 'AUTH_SALT',        '3r=y@H4C=$;7<01+F-+5Fw0Bg*2~RS4ucyg=17ut8Lj3/Bp^UUk&L@q]xE&*xX2y' );
define( 'SECURE_AUTH_SALT', ':91Eof4K+$B!O|S@Q&]_8m -EM7.Jsvfu:;CBg)RuUm[tXcv#AC)e.,5M|`0Zpm;' );
define( 'LOGGED_IN_SALT',   'H`annWD0*MjF6=90:HY16~mak$ZEbEDmUaA}5+hFM=xTt0@OEwCGb,Tvgrb=X<@Y' );
define( 'NONCE_SALT',       '?]z(Vnwvw8k_=+&vaTEtmiw9*I4SYSuNxOzbXqBl68ik0*V%J}rpG/gp/TPJ&-.X' );

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
