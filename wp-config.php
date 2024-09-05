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
define( 'DB_NAME', 'wordpress_brief_db' );

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
define( 'AUTH_KEY',         'Pn|Xi&Q0(lg82VFgXrtd^pwE9)4U#5eR2LF$@O$T^5>GT)EKsy%d=cYQ[AlPh|Dp' );
define( 'SECURE_AUTH_KEY',  'OQ9[PkG`.F7iTck7uRG>zN/E@H{j_0ApAEuLE|cO+M+%6vD4#lP_v05}j$H]j_1y' );
define( 'LOGGED_IN_KEY',    'Kh/v%ehO:CpH)3QULqv`:/JM-S|-QbDbu!^dK.b|An(P>&MX9X>-NkL#}}~uJqYe' );
define( 'NONCE_KEY',        'T~/a+is^QK}|tYv6Ti-<7nq`/<jR?dYv(Xeq>`I_3[ -*O$%vT~Z<Kn22-J.5]N$' );
define( 'AUTH_SALT',        '3tPn63UzWL&Ity)%Nbplm5fxmd_j(+Kb0EUaK6/y)=d!ZG iX4uHZ:;mIIVM(VX/' );
define( 'SECURE_AUTH_SALT', 'SO QLXYuAi5PZ1<;T2G7y7S-,OWQ&ToG5u}8scL<p,dT.F`tjYEQ+uTp/y4)Urc~' );
define( 'LOGGED_IN_SALT',   'x$u7Vdg+lz*0>npsC!THd7C<Y^?2,4;6@s ,31o2M$>Nxlfoi-hp/Flg)< ^gHi#' );
define( 'NONCE_SALT',       'O)+i wUG<,(,RW vS#Z{4>z)v:$2Wrp=4Kq*Z w*bB7lg|Slr7Ive$aXBYRguD]M' );

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
