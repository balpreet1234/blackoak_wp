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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u997496973_5OIlJ' );

/** Database username */
define( 'DB_USER', 'u997496973_qZxLI' );

/** Database password */
define( 'DB_PASSWORD', 'J0V9MDF9AT' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '5a1`i{sB.Y.kQ/RZ:isF=Z3]RB<?EV=}SV4fCMdPf^S%PAKsVb3)L>$yp1}INsV2' );
define( 'SECURE_AUTH_KEY',   'TRFg}((jTcW|;#t0s~O@80+h+M]%DAD7S.1~d&]PkC}bN7E;<4fTayCrN@uof)nP' );
define( 'LOGGED_IN_KEY',     'UO|9|D,oN0rgTi^2}b5M7 XU%kx;+LjUhg,Yi?[T1jMZ@|w/+MGjx~_8]Jy}cT<-' );
define( 'NONCE_KEY',         '&#3Ik#Mp@+O}*8DfaT]vk70FZnzn K#rNC*P>Oz1x/mo#k!;GhB4=r;lF0V;LjW#' );
define( 'AUTH_SALT',         'SRuSy,3b*C=tC]Oi:I.yOvI9c+MWg<57Siul}5=;]6OJ>^z&<7|@:F^0B^U5xS4^' );
define( 'SECURE_AUTH_SALT',  'YNMC;b<f3ZE*}5A5ODnebf8_zQ1_Qg`Ju5RxD}@=0$cMCb!8f/D)jsg8X4v=W<}~' );
define( 'LOGGED_IN_SALT',    'Ff=39>q%g/Wp`|.OF5+QXnO<{9cx77fCP%9dE|Exf.y+a5)8lLVC;0T?oq5]U+au' );
define( 'NONCE_SALT',        'zeRB_Zd[u9!PDPy{(rxvhQr(`F8hBu_LezuYZNEKs^|B3jW!Tu~oYn8Cj;UU]hi?' );
define( 'WP_CACHE_KEY_SALT', '~j)>Sv|]A~.Z?wo[[9kzOW|L:|~8}r~JS{#t sdw-@#B(o4dmL)5wrmb4cHhzad,' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
