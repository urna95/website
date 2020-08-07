<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(xQVW]yUk-!r6^4cp/C5i}g+S^=C$Kh[C n!aj:_n=1;/TRUkcC#L hK?~Lpr0Os' );
define( 'SECURE_AUTH_KEY',  'AGk]tP_y w439KwE5ne9/o uS}65N=6DFB&gdIk^rZZ< -DB]Z]$Fu;Msm?;x=/ ' );
define( 'LOGGED_IN_KEY',    'GfnJ[-#Xfr}CPLDM^Qr|yd5m~TKvR.,GFGVaF6#z/P_HY0%1].%IHd0,mC~Gl5n{' );
define( 'NONCE_KEY',        'VxqIF}XvlKdQ,(fOUU|%L^>u*?tL,X5ZM*9QW>jsKHil?$_S6p,ua!y[zo&J,qwV' );
define( 'AUTH_SALT',        'yZ*T^LEuM&RPD4Y%}.ZDEl{pAP>s$>hW%$ihlEWQaWQcg;HTiq,Op(c0`e8O:OM7' );
define( 'SECURE_AUTH_SALT', 'J?#tz%crPA<].BaCx8`Lv*Tb9gPeCC,&zQF2eJFRI)UMM1aTr7fG9N5)d2%$^va%' );
define( 'LOGGED_IN_SALT',   'I2vyMD$9SEmv)L*NP7(yZ9Z.l3w:)MnJ?N]SkQ)Mq-}|G7UT*PuA7j>B#=erN#K0' );
define( 'NONCE_SALT',       'pXcK$8CGiWcoIgNz[nzX#t.=HQ_>HCkA[D$EP~v[jagEt)1fV}Nm<SUoA~*`xu`^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
