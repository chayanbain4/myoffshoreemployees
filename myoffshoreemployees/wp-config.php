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
define( 'DB_NAME', 'myoffshoreemployees' );

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


define('SCRIPT_DEBUG', true);


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
define( 'AUTH_KEY',         '-`HCJB?]B!EH }j3PliAs7Khp7Ui]O7=?3rF6JauD{i9),W=nA%6y~@a;EDXiqF%' );
define( 'SECURE_AUTH_KEY',  'A+F#H$fbL~CDcs0hMWteLT&&{LrK riPM1+s74Qx!0&-Nb,}+j&f,u7[z|Izf&ta' );
define( 'LOGGED_IN_KEY',    '}k,Gb{Dh!RQx&>$@]$&8_Ep~FD$l*VOOHf~$)g/IsTn2<Z%m%{V^Vir}>v%VNqqL' );
define( 'NONCE_KEY',        'Q:#yjLt|Qsb<J^1^ScRZ*.DyWVnQ,RDT:K,)b}21Rx1q@+~MPqklz8|I{5e4{{Sl' );
define( 'AUTH_SALT',        'rJSY:n ]Y@mL$a?]NWw~LSJYmRX4NbFMnfJ?HF&!IX!y$H5u]I[7)x~l,aIY2qAo' );
define( 'SECURE_AUTH_SALT', '0XLB(OXjU^ =l}#/SfrUE&^,Ce5?[exZ7`zwQW$MiM$EGjEK)VXwFc:0<`p|)N?k' );
define( 'LOGGED_IN_SALT',   'CN)K!#!+Q<Amez5BwS~]`YZ8l-uDSZm}6bud[7)Q??jz;6rxL;9ru6@Yor/$J;PH' );
define( 'NONCE_SALT',       '8c!vZ>lE,+1HP<H-Pz/<`{54,E,.r6Aiot?vbZzj#FB*.U(VEj&XS;MPqAk!W|i%' );

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
