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
define( 'DB_NAME', 'wordpressv63' );

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
define( 'AUTH_KEY',         '#S7!ob,%75@*fd 1[T^oi2uMWtCg*0Ea cwLgWjI${!V>0|(3lLuG,zu<wOsr1k[' );
define( 'SECURE_AUTH_KEY',  'Sr7WH*M7!YzMuUSq^B$sC$vwIV}jWKf$m}9e[X!dkzvr(,%e ?U@e>>Nassv((<U' );
define( 'LOGGED_IN_KEY',    'nq0TjY7/vlI=o}:ES>Z%f3J=1A<z9u!2?BO= )Iz,sXOL7[nm6:X:,[,ow9r9UTJ' );
define( 'NONCE_KEY',        'qwZ1.J?HQp266,kA5r3#kXr]UT*Q02QUr/%R, ^{on$kLUtw=P+QJ8PQMwK`_uZc' );
define( 'AUTH_SALT',        '.z|#|nCDd+s_Q=^w anMYW@h.|oe)CZ{DsaKPY!rOSFJr46?,ao{467yO6{sZvh]' );
define( 'SECURE_AUTH_SALT', 'I--Me%*8YM+1M[s~t#ubs `8q9g.(gul$xE~-U8m@8wpTbPko=hQZYb,&^X:*`Y[' );
define( 'LOGGED_IN_SALT',   'O]S6f/^*<DpRCNf|PcCG5O+?>D7PhFTU;`5qG-0:`b=Aoq5~*}cT~),kyF{^&&3/' );
define( 'NONCE_SALT',       'qf{4wxEAzW@TIweA3z`Mk<k@AxeH440~r|y=TvgoDIL@(X*TZJU}MM:_g@q*yb V' );

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
