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
define( 'DB_NAME', 'codeher' );

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
define( 'AUTH_KEY',         'iaJor&.mdvfEwl)yGG.C;,!W>tBq8XFl[t1*,q5 -43<XU:z R9zt>gE-FXt?[1a' );
define( 'SECURE_AUTH_KEY',  'FM6?]Ca@qKUcX:S+7?l]j}_pLg1{n:1EWq`-5E{/}?](}/W-,7HrV_%9_!G<8`K^' );
define( 'LOGGED_IN_KEY',    '|HS#w)_^!4tTZ.d}atO|!t7_Dd!=~&i`b+&RSqU8-VP*b7`}K@>=ldU1WY,t;fXo' );
define( 'NONCE_KEY',        '0<vZ1M_+.Y.Xhru;7kI]e<L:-V`<9Yhexp6ePss~qqRjwb>:o2,T1#p6Hb&1%D?/' );
define( 'AUTH_SALT',        'Zk6Kos5D&!Cs:^jJ9Kz0wu56fR|&W@{}8RwQ!0mrqrho#a]aD8H$|#GW3W6@(tMI' );
define( 'SECURE_AUTH_SALT', ' xD/|  0RLF>6:7$ut(y3;Dgn3S-odB[p+si**N!wkN9vZ.^]1mxi$5<#/P$@l|V' );
define( 'LOGGED_IN_SALT',   '/nQ-:Dm)2Zu=d+.};E#Go7s^x[m|vWf<G8P! +v5F*k5qaH &?ze_C_.&:wW~$l(' );
define( 'NONCE_SALT',       '=WCR=u9]|8ph;Tbb`G^>rIkUU9YsAGxqm:6,t;5%Ra(19[h7ue_lE)D[$uT}<oah' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ch_';

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
