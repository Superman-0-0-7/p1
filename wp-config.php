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
define( 'DB_NAME', 'pone_db' );

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
define( 'AUTH_KEY',         '<ef}#]_RBXISAQ:2Y(X(J_ZyW)%9,$-B8sWMi^V.p}!am{7v&H|z{SU)PM$v[#Me' );
define( 'SECURE_AUTH_KEY',  '_  r{csNDN>C[D,Nj`^Rl!MAd_ 1Ut5H`G_f[m2rlQsUDu:^RzETYp85J3ZztS:?' );
define( 'LOGGED_IN_KEY',    'Jq-`D6{YmO[jTxxj>tdr$zF$g6%c$r&vpjbch|d=TT1.q=V-cO Gk0rkK*&3@U~$' );
define( 'NONCE_KEY',        '{ I(>aSII$!8ruZ:xU`e/Ql5PX=k^QU&=LjbCxUbwk.>nP6*iZlzwV{3]M|Y,EU%' );
define( 'AUTH_SALT',        'EV_Q_P^4~Wx#^)F<H& oYqE%u@C=kWjgi@HVi1N_ScXq1ArgBG[,n>*t^4wnDSXv' );
define( 'SECURE_AUTH_SALT', '6JUkW0ZB&LrbIludx7n5g?/>/O3#J4prY;14Z@7JDr;B3>?%D8F0([;Sh` rlIxn' );
define( 'LOGGED_IN_SALT',   'KUACHu{o!q?T$<Rz.s<{npbYrj#n476f*Bxz^36z6|kjx|ngp$?|_n@F[]^M,R%F' );
define( 'NONCE_SALT',       'N3JCel.RS`CB^A&shhx)8-8w;h^`%wy1`H{KrR|8 Xh1M%U9eK{=u=qO!nXoo/I+' );

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
