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
define( 'DB_NAME', 'wordpress_v631' );

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
define( 'AUTH_KEY',         'y[hMn(Bla}}_y1S<wU#B<L!aZ<#tYK}Bnb<,,Dh4y&(tpk~Jt-GfMWh0oN}:E9]I' );
define( 'SECURE_AUTH_KEY',  'jQa,r>)(U@OEOoS Eu#Db qPJP{cgfmb/&dbZ*4a$:yRH`P;o5Q:Bz#mdQtE;;-V' );
define( 'LOGGED_IN_KEY',    '5k/N|3#V/A_bgyH(4:)%mX~M0F~*^vF?-t~1U1!.nn:rS~5[VQA.zCL+}3+wXO#D' );
define( 'NONCE_KEY',        '$BeF `5#jP6kiOJgqyV?V|$]XG^>j=X*BALwLa1il1fl%^y_W!YRIO=d4g/t{(aQ' );
define( 'AUTH_SALT',        '1xxtFa$Pdw0%?]5q2oAD?1-LN/GI_ ,AbkhdnwOp.g-G(Bz[@`ii$Q7{mh4XP}!!' );
define( 'SECURE_AUTH_SALT', '!7?,tQIotq$p-XBKRD1EwolNWO;w.b*cKYka3P2+Lw `$:f~ CO^b@PpFu{B<l`|' );
define( 'LOGGED_IN_SALT',   '#_Dg<mJ.;:J^z{*ZG65jMLWBM[HqBls~bhM8HfAETt,h[10T5A(Zk_Tu?(>7vx_T' );
define( 'NONCE_SALT',       'H=i$t&1TH 8KVpG-^EQTO<077O[,goA=lR=dV/x->mpj}9rZZ`c~Ph2z$].FxmXt' );

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
