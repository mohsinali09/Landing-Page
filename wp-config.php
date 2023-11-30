<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'landingpage-db' );

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
define( 'AUTH_KEY',         '9h|2ODi2<lW!<&ivVyf0OcLo1^18+RqQ%(J~71 tWj`{v4bt]J|`.:f>jC@z{U}}' );
define( 'SECURE_AUTH_KEY',  '/%t+BXsXoeHauvLzJucb%@@|J=~ozv0K.OJUn;&vV{c*Wr3798(_u4OuyEB0>~<V' );
define( 'LOGGED_IN_KEY',    'xQ9jkyCeub4W(*~ 5dulg+zA@/|4PUYr7#~,k@jA(Fln$$`YfOj[n R9l**N8(br' );
define( 'NONCE_KEY',        'jF06-m$U@.$I5Za11,V+/yl+jn1ig0$GL cNf[pjI?1Q=,O]:Y5] b$W<iy(d;5S' );
define( 'AUTH_SALT',        ')A89BU3aXP-6,qFoqt>-1*0MbC?)Sh!&9t0[:1S7ejtv}Rx&~M?C+sG&bt_/o66f' );
define( 'SECURE_AUTH_SALT', '+;TpaFZiR^9G%h%iMB?-U2sE,&Ysh>MahKc|$z0!akqgflveFli8|,KTFp5_/K8d' );
define( 'LOGGED_IN_SALT',   'U!L7mzAMXLOX5hkx?p3g6|JV%!?,0D$OS% L5nzYDbt@Umho8V77>$4~}X|+- |$' );
define( 'NONCE_SALT',       '8OqwSuLB_1)[<O-v])I;.xmqv5Doa{#+z /+I|?~U->t:Gw=|9::5bF>(=KY#&u-' );

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
