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
define( 'DB_NAME', 'demo_db' );

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
define( 'AUTH_KEY',         '=Q!VXK6h4/o/EL{:jdk2/fq*#Ba 0*o0-c}g[MJwf5$xz1dA^OIe-m]Zt8]f`3@}' );
define( 'SECURE_AUTH_KEY',  '!Y&9a*Lemcr~NvED?ek&G;Tb8NXT}`@9aGJ<%I`M0KI;tWpho=|0PYN@%Y$ORu#3' );
define( 'LOGGED_IN_KEY',    'Se`]!}5Y*:]B([w$#!^~#I~Yf+F|5e33zSWD`Tu}eW5B>Y:48@:/o^e_5+F+ey@q' );
define( 'NONCE_KEY',        'gqbp/1%,(k#u)addfW nd0-2ly|%BH{ 7`L`vW;JIID$9:9.P@m>9mZYp|?{c)6B' );
define( 'AUTH_SALT',        '3;Me OQ2OKpqfL>k?du$JK&L6in@of|Nk:h[]Ri=Kg:4_H%c%o5C r-o.d*$p/P1' );
define( 'SECURE_AUTH_SALT', '|fC#>VHTZzyuy,Z!w!$Z>V1y>YIdNJ2-%u+_K&^dTHD_&wxFVbCs71G`K;&Mpa,,' );
define( 'LOGGED_IN_SALT',   '7oO]b|:@KS8n;xY*Mmq#Nk7cF=qAK2+m5u%6-{`~!Vrd(:,Y6IDX|% 6odma 1-t' );
define( 'NONCE_SALT',       '1z!2AAH7O(4/UvCZ~Q]Ic0}3}q)Da`w6W@_~pns!4,+;xe^K9Ucv2H&z]/IK0Tp%' );

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
