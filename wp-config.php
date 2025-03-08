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
define( 'DB_NAME', 'prueba1' );

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
define( 'AUTH_KEY',         '&nfG/LC2``=~Fj5oVI#^F7o]hhM)<Nq%K1.}[#$uRp,| ztBI~rW96MZ{&J!kfa2' );
define( 'SECURE_AUTH_KEY',  'VEqgW#)A#}R([EpV~Zu^2C/r6FS/@;J&`7p1]K#d/z &R`C0[CQ0OeN|:PhpX+.R' );
define( 'LOGGED_IN_KEY',    '?XTaS?Sf@(4sHeGlrtX~O9$>oDH%,=ox4&#8sgR(vG4a;ls{>=:CK}Z_O<Xh# :6' );
define( 'NONCE_KEY',        '!&~oz6gnO%<gtO`Y_0 subauW =[Q]ICS[|* %vhl>u,<kI0:6WJ8]A%4E0vc_@H' );
define( 'AUTH_SALT',        'xNo$Lwbb4|9+LiYwBfOYKn!Yk*JJpJ.;Arld<Ec4c5g)7ipPzYTb4**UweRnKb01' );
define( 'SECURE_AUTH_SALT', 'W7,g|`E`eF}wqT ]iezaWBK5SmxciRot3/A{4:&v/GG=5CSQR-PXc}CwtAvy_/xe' );
define( 'LOGGED_IN_SALT',   '}202[-l+-2EFawa<xvJ&I{#VS:#/5oK8uuL7ySFZZ09eLOfwHmG_i ;^wf%~ZIpn' );
define( 'NONCE_SALT',       'rEGz dR!$AOk#lrOv?nCSqzwLmb4YKf|H!$o)J#74]/Q]/T<oNe?!3gk,`sqi0Ex' );

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
