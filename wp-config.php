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
define( 'DB_NAME', 'wp_ecommerce_woocommerce' );

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
define( 'AUTH_KEY',         'KKQ|ipr)-Bv^DrwAAcJtStVeq#|Oq(*Uxdc Zy#1ez@x}Pc_C!:[(dsEaa%O7PJh' );
define( 'SECURE_AUTH_KEY',  'NLP[#Wld)/>QR!;+-0iu=9box4gTmPyZ#Yu)?mMKUiFiGW _adDzZ6^ofMMl]/7f' );
define( 'LOGGED_IN_KEY',    'mLE.y#Cnw5f%y{u5FK@?n:E>}iJ;S?dJ@B;96>=I8a8C.<*Q`6N.f(iMrdhB/vVF' );
define( 'NONCE_KEY',        'QG<p`tvKy{%WEInetXamLF;~f2O+Q7 0Vy>WSt=!dN^Y4;Dm-J*DwHP#UG37l:L5' );
define( 'AUTH_SALT',        'Iz{s([jG-rXa&(f^LweD#pz(e6AAm+I4 ~i}S|*/2)*2Cn.E)h%sB%Es0<c.60@[' );
define( 'SECURE_AUTH_SALT', '>F/Y|=lAT0Uj;ia3LL/(]~AKE@-Zcy1#NJDv[SGnqZ^<Z9uV_L0}peTPEs5|Ac= ' );
define( 'LOGGED_IN_SALT',   'G#BXjlHW0<psau/zx>%=cLwR(:%sh.%umpa%D5y&QL$aU(obvTdOWd9:Mq^0Gy}F' );
define( 'NONCE_SALT',       'gR8;E5Z3EaH*W1X!g:u81WUv.ZCXo3:K=y,a??%?{9%Aw>{Q`Gq+`jNJ@cB@n/<7' );

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
