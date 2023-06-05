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
define( 'DB_NAME', 'ntt-com' );

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
define( 'AUTH_KEY',         '!#J5ZhRb;qc&cI0aAH=jO|9*>7w}H`m{G!T]UCGA}-W0:J1Z&g%:BnKc/u1@ in[' );
define( 'SECURE_AUTH_KEY',  'kbQYpK|eF8j%BoDQNH-)#u2 a7e]i9>p()C,0h6ku8D$EatgSf#VMcta#nvMn833' );
define( 'LOGGED_IN_KEY',    'K3Di{}^z37VNL![W4,?*?nci-.YcP^WoJK20%XQ38]9WT3r3}Gw%XN,l4/mIhO~E' );
define( 'NONCE_KEY',        'f@[s<rOZ>V?G+m0]hLv>=vO9[T7([p?*9p;Sx$IP9/kJ34@-/.gFB;CL;STa8FQe' );
define( 'AUTH_SALT',        'G5+L%+O[T}#qmh_f Vt@a(zDx(z@lMAQOR4qoDaJps-RQ%5#hJqb{ZG2.b]sZpbe' );
define( 'SECURE_AUTH_SALT', '2e!/7P>QE+EQ=%0~%GnDIbp=~b=0V 6<xsVfQGRN9!:asBZ,DW4NoN_=8Y(3,Gt{' );
define( 'LOGGED_IN_SALT',   '!rBXT>Dwke1|r`7DFvMg0|Bsk7Cn#LzB9)}hop!*JOZ}f=GGpeZ0= I|J,P9d!$e' );
define( 'NONCE_SALT',       'YmE_XD`Orfk-Wamh)fZOcPOXT)^.=AuYCU0R8]Q(x4#yn+4KR,4kr/NX;*2#p_q)' );

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
