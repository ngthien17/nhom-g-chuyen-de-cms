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
define( 'DB_NAME', 'wp_cms' );

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
define( 'AUTH_KEY',         '47&ezG#<(gVG%~)b00kIzl&Z[/1@(iD7dl. G=!T>4:i|]a1MEoxVFKY,K;P~&H-' );
define( 'SECURE_AUTH_KEY',  '?t2t?kPl/%vgKt?3I]fy_+cq/r?VLv7}v%twk_/2ubSvy,3&kh>1e^$LkxcF,m)G' );
define( 'LOGGED_IN_KEY',    'WmamVe7Ud2pv.1)*k]6hupJw8G6bnG2`XD|+p@0i#BXJC8%[.inyrxRJypjonwgS' );
define( 'NONCE_KEY',        '[A6o$i/Us3dgQ!~jZ8GNEC(wNd5PjI$QcEh!`^2 3yly[!nERejH4hGo-UTtVKU7' );
define( 'AUTH_SALT',        '(iR}dEaJ#)Y>;C8Y ^E6ff}8r=@!y=p1~Z+hDYnR?Txr*(qMNV2ESTfj my4v?Zg' );
define( 'SECURE_AUTH_SALT', '{UuN!hDCOY3{_[SyIma#-07Y=HHalg;W{B0`FT-F: F#c=+`^{]J%)wQG>Tp,+MD' );
define( 'LOGGED_IN_SALT',   'pwKBZq?S=}q[}3HsL2EKf)*IcOr]XdI:V<6=IeQnH6P@QHt s$--jU?2@[q~Zqxb' );
define( 'NONCE_SALT',       '$+z^Y(h[fb f!`>0{,iIxmQqC|Or j%X=^{} @_bdl>0;}~c&?Q74]U=i8=mR?}h' );

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
