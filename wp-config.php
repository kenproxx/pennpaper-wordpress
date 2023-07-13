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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '5CgmXk>o[yfi7TI(U+B$qZ?8LX[zZ+~Z$2k,czfSZc$n4<JCqGHp]cr57nkD!DCp' );
define( 'SECURE_AUTH_KEY',  '#5k&-_7cwC{[&WsE9AemU83z%P&cR`5O|~&#clCm@Wnl,X^^bTu`? Fjq[raJ?14' );
define( 'LOGGED_IN_KEY',    '5Lfr>i<_:8sT(h~y B8.;ON[IjtrsLRybs7<Ny405!e.3k]Nc-9MU0G>LpB-%iNN' );
define( 'NONCE_KEY',        'X6)}D5YcHuOAZ]xL(1!iQe=gef5XnSc>rj^EIci$&W/+y8_;![[~)NqROZq{BXIS' );
define( 'AUTH_SALT',        'csmUqcP62vccjBXV{<~s}`xkqQ3e.dLIeK`2xh)2^354bqV54P[C++1Z.0-XH[lW' );
define( 'SECURE_AUTH_SALT', 't1t2`i#%]@NXOvhOIwt~czzU7},<1eAUT8[Tt`4TUgq:o3ZRSL||tdqbx6SSZA&j' );
define( 'LOGGED_IN_SALT',   'N,sMX.@NNO(K0V=#oZn(``0ME#.W)PjrCcBO!TSL#qakASn:z9w/!%)oR1JC9Vz-' );
define( 'NONCE_SALT',       'c.ZeABvF(%?x[36p?]2GF(`6U{zyp%SNntPEmJWy{4pPZJ[S]gsRC4n4>.oyJ?}3' );

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
