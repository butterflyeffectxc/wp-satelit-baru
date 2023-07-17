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
define( 'DB_NAME', 'wpEmpat' );

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
define( 'AUTH_KEY',         'mK>,*!]G&=*6PyjYM>G~+#yrcia5`,mTZCBo_(/y2DIDV:$uejdvZ}et[D!7N%7<' );
define( 'SECURE_AUTH_KEY',  'NF1lbGqZ)F4D2@jqjh|p}h5[v~r><HQ>={B.LPHrJKLU#Ro%H0}~ V@3zj@9QBL7' );
define( 'LOGGED_IN_KEY',    '322.%pvE3o.Po>]rBp=/i_O;Fm8hB&Mx>rt:3F6`)@uH.!w]m$Qnj4QI:1bxY%cH' );
define( 'NONCE_KEY',        'F.im!z2_2Bv-b*RicXPyEQBX:c!T![x(f^5f^iP!$8.g8w75.-0B1S.L,o%*ET3$' );
define( 'AUTH_SALT',        'Brcpb1Lg4qsj$vA37a00 Mr]I|[Sn3 ka,-vq9l`:&Erv1MsY8vs)&>#v@E5[i+3' );
define( 'SECURE_AUTH_SALT', 'B({;SF4Ho&$CvD;K9Cm,mbJKxp`(Czz8E/D4Y|%[#^a>#_u3-cA](s]J&]PTJj&>' );
define( 'LOGGED_IN_SALT',   '.uF`1P={>gEn`|p%Z|hSF=i~;wQ+TEBPiSI88Hff kNNJab(WDOt*9o,Pi7v6|J~' );
define( 'NONCE_SALT',       'Kvh2#(T4O/Vm|^M?YiSIO*Tq]F?laSg~JIUm}Y5[+B7*DK+:YI3u9+f`i]vi%- &' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp4_';

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
