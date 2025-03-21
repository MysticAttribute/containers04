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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'P[s4GTu4-QYOWN95OEWGzlQU|&3X2-q%TWeq3>%9+V=d*pXV%C!1ebf+=03g>+Cz' );
define( 'SECURE_AUTH_KEY',  ',Soy#y6r<_`D]wglC`_A>D(n5Jny[b@S}B?tu,{[y [Z.5PwH`d-7h3#A!z6Q%*b' );
define( 'LOGGED_IN_KEY',    '},BIB^4[){fRbaE].@9cn2Y@%oNRaOxE0xSfa4!s.F-)bgiCm>F4}w*w.1?Z <Tw' );
define( 'NONCE_KEY',        '!BT)tbZ9ynT/wX/_C^OI2cuE?whMs+X&y-6Gj^7AmmFcBT-UaD68MQx~iq|&m~Oc' );
define( 'AUTH_SALT',        ',;ZLcJ;t@>`?oNyq|3IHa`X9f~xL+^Lf<Q`<[7uUgy^+4?yYuTV@-O]ZN VR|(kq' );
define( 'SECURE_AUTH_SALT', 'Q#Hh6.D^:!R8?[?N43HW?q EwLIF )kSa%j@hudJ8]?bN3>=%LUv^a8^fM{rs9Bx' );
define( 'LOGGED_IN_SALT',   'S-;N!sf?$UA-o)ES{x<-Q6>L=Qycb#r.PkF*1Gk?8~pqo0,8k;Je4]5y`(o@1o4G' );
define( 'NONCE_SALT',       '~pKMeCyJ08`k_uw;2z[P7+Vez8fv4pf>N4`iEv9go6j76f&{zFEPys@JVRP~~[^ ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
