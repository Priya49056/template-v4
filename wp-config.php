<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'templates-v4' );

/** Database username */
define( 'DB_USER', 'TemplatesAdmin' );

/** Database password */
define( 'DB_PASSWORD', 'Z%2mL!3Q#8vJ' );

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
define( 'AUTH_KEY',         'fInFm+ZF5%:]$7@/N%gS_RuP-I{E;bX=).utV[F=Rr}[lmE0N0.Uh&bTp%ABwu*>' );
define( 'SECURE_AUTH_KEY',  'A*1ABslZRK);lG1mmip,e-fQIR3CCT#I@#KB_r%f{YG=!{*%#tn@G)!li[SvceVj' );
define( 'LOGGED_IN_KEY',    'Ps/,3IZC}BXmYQyS#(|Icjkr^6],y+ddK+cP3L_Jq*bP~p>11_k!wpS9fR||;.i#' );
define( 'NONCE_KEY',        '#+eg0r:Wc[Y 9$7 mQtL/8.E8d3Yze%HeHoxyp^p~RUuatz[OM_$2FXKc<S)M[Rg' );
define( 'AUTH_SALT',        'Tt G&:l7E1a4CSyDS3!DZN6Ks;aa_ef/:fakubmAH0-gHltXIohRBA#OV01uk&N6' );
define( 'SECURE_AUTH_SALT', '!HQSr`)a16k%fUn133dU;LJleL/%,4,~&AlYuC.I+y(Sb%U>nw?w/{k?N2>IA[vG' );
define( 'LOGGED_IN_SALT',   '3Emn?sx.1[{z}81N>4%0?ORLo%fL;A bZI?B_0N*aA5xr][pj@N51 x*)@qZLk}+' );
define( 'NONCE_SALT',       '(3EE9k6?dddAAdSn-!e~4s|0hCW$7>ott81,pi@/or{P%I,&Gmg^{3om,O^:oBt{' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
