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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'z^93vDrveCm.k^a%UgdanVS}O8n,L>=P7hB:3dji<YOR5cY*oR:7j^8${[j]b[,1' );
define( 'SECURE_AUTH_KEY',  '&/},y# vyvHgWa%Ck <&H P`w,K8F`7I&r2;|RL7HC?*3J{@j+&q$rM-(X}^7I0Z' );
define( 'LOGGED_IN_KEY',    'V>-Z{XMLNk}<&Ux2(b ;(&Y2v=k,T,,vV FeeC#r-m/$Q>c`1@MqU*_9#)`r^4{3' );
define( 'NONCE_KEY',        'DAo9A[+YcNCeoMB kb:.`7!{^ZY#waoZ82i>gM(N7E7=f%z&BpbY-Y{Tc[Op`w9S' );
define( 'AUTH_SALT',        'aIoy[Lv7Iv`$C!AInu9=B/q%c&%oZchtWgYU>=lj(?a5|rE&[`UcH_ptpH^yX.w7' );
define( 'SECURE_AUTH_SALT', 'bP@46?<ifcPx/bDCe_R(Fr4] |!0tXOHOGb%ph5A-12wP9*xRN0d`hgib]@ERMde' );
define( 'LOGGED_IN_SALT',   'VSi,[M+qOFVkF$SiU(84J3GOXtd4*sm;]!z[*}V0H&a}).kxzL>eS -/g jyv;Wc' );
define( 'NONCE_SALT',       'a?,Bn?95$lL2k5j)$[S+KPptTir}-9C7]3[^5[q;B^XbwMSQRR_mR|D{cMOa}i~e' );

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
