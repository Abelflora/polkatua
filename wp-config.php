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
define( 'DB_NAME', 'polkatua' );

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
define( 'AUTH_KEY',         '_TL8DjEx}nG7FK?V`uK~vGDj*>a#?IVlk@E=CDI0-mrke^y.@7[hy-htf}?RK+/y' );
define( 'SECURE_AUTH_KEY',  '[~_SF%e& X)-<B^fr|OJ^@rUOKTl|**o3DjhX:iQzQ,w(A0sH2v4LD7X#>8F=-`%' );
define( 'LOGGED_IN_KEY',    'm!WqIxQMKc|Ln@g[V)`QA2Yf[l{-9fyQ1sTjOv0+m,iauTjq>J?=Bf(X40bD}8|A' );
define( 'NONCE_KEY',        'Smb}#&%}Bb%;yNWVhfV)1CTPRn5va9K=0T96 G<exOtJhMimXzV>^7vC&(5|B_MU' );
define( 'AUTH_SALT',        'oGm>630KdZ8LF)jTHOO&Q/No&qTO0U{4 Ki?/rbW{23teFW`ED?%SH>:Vt.n_@`Z' );
define( 'SECURE_AUTH_SALT', 'EfydrF?aL-8^J5tKe-Wx`!`T$#qd0Q{ed<`.&{rc6Sz!(poM0ma;}.Zk47i={s<a' );
define( 'LOGGED_IN_SALT',   'NHw;#fvn!<om nIJL$qVrrG+R5ubfR B+;W mKLG,ljAK/:)AWBuQ!2{>-+PDBXP' );
define( 'NONCE_SALT',       '_1[?G[8{m}V:HGjlWb<{!PU.=X&W(T*{NK#KH< &Pj=<nfMk+/LhzAt0cKO(%-qx' );

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
