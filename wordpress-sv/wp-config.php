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
define( 'DB_NAME', 'db_wordpress-sv' );

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
define( 'AUTH_KEY',         'I_Y>:y#5DVS;F/e+uOsQbI.[EL([=XIC:~S);$F,aJmHFq`;=y$qM1`@I?cP/*A:' );
define( 'SECURE_AUTH_KEY',  '}5<t;d~!8MZ(9>Qf]G1E?ncJgZiMrQb:D%q~hSI)v_8.>eZmOf=&.h.zn}7)q^%v' );
define( 'LOGGED_IN_KEY',    '-ymA~iS?_LX+%ZnJMd9ZiWA.|Pk/AnPSjN/`{9o=M-SCeiO_^b|xvVZJ5I,ORl:3' );
define( 'NONCE_KEY',        'uI}phII_5$!kHIk=4iQ(9R`$LiU?]/10B2^e&8esr[R])(zb9AF.;WqGsCW&!n#S' );
define( 'AUTH_SALT',        's]h[6~MX-FKG?Nrd~}-CX7Hi:|)rNz;87X!x`B|@s%JleE}[(F+Opyb zLnbRq^w' );
define( 'SECURE_AUTH_SALT', '_9)|cy&7j^AXu5=/$R4,G+$KPPVMOx?N?rt)ey,P.H*n(C);70`$Dp>nJvq<1YB_' );
define( 'LOGGED_IN_SALT',   '3K{iF7v|@ld04vZE}^y6Q2C05EMz3HI&_8_S5>)vs~hH}|8[6&{Pj~~<`N[GwSwt' );
define( 'NONCE_SALT',       'ro5zap!YB)r<,TF/ Wb+u=sWLg1_,)s/3HC;B(h=.Y3Gv-uHD,SV`jlHY6QGlyYL' );

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
