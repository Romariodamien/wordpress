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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'Udb)Bc4!LT 9w}G.4*$d$I:^-bfL:>t%.n!S2N|W-&m9MHFIw#evGt~-D*y0]8tW' );
define( 'SECURE_AUTH_KEY',  'EP}i=H+&f87~drB1]drwY]VH_*-u2>Js;D9*MuJ=4H{vq)dyd0w-gcj!&G{HiOk7' );
define( 'LOGGED_IN_KEY',    'z5=B!I0s;qZg-:WI30&`r)Bde8t~=,T,My6wH-K{{9Av:jPQ>`FhYQH+9Tn%=sT-' );
define( 'NONCE_KEY',        'VHk:[/}wF7Fi8u}sR01FHvPcx{joASDuWP,xM`oyHW>vj>SH_|HRKTB2T7TyXt9}' );
define( 'AUTH_SALT',        '}c&>)c7`{h:m^tbM*g c3Ih*do^GIZ(E$Ne`:g/h]Bz&ne,43qKmMmxzg|xL3#,@' );
define( 'SECURE_AUTH_SALT', 'vCBL+R3uG%xXC(7QvOkH{ j*[v$x^8;,i0d>QgHjy8Ac1>OIRkdYKduEa@4@Xw0m' );
define( 'LOGGED_IN_SALT',   '=ZtYY&oUq?}d+%]`FMDc?tA=#$,+.98c4k0}rs0`NA1AYs8aRa3:C(seAh$IW.Bl' );
define( 'NONCE_SALT',       'C-+p@J3P44WzZU26HC|@Kh4A-8NTaY2n/?t+^@FfAtyP$H#z2j-Kg4zNnz[MyH:E' );

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
