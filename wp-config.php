<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'traplast_wp_drjjf' );

/** Database username */
define( 'DB_USER', 'traplast_wp_hc5kf' );

/** Database password */
define( 'DB_PASSWORD', 'A3N^k5vscB~5ILI_' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'gIf9bl0134K8j2|hD/0+)@yoz9md2*5#3Fw8xQwv1nJ@i)1b0T;%87:u0[@LVtcb');
define('SECURE_AUTH_KEY', '9;W40pYR8s4Yy720654HycBtmNXWVO);ONgw8~_4g3yUtKbD8e2U@3:u+w~[x5t6');
define('LOGGED_IN_KEY', '-mi7ppdkQBZCUzz](/|4F!]T0xx6%D[FRFJ@At0#nu795CPJ~+/Isf)|ZRG3*mX7');
define('NONCE_KEY', 'Xb%3J*V-6sN7KHrf3]l*IYlg8MjHW_DXTi(|v-TW0+gI|33o3SvHE0i7iS76P1ir');
define('AUTH_SALT', '(38@5aV6;[tg/]iR8h7#4/h4E+2825Qi0c0T6K9y!b1i!iHz7:(]ji+Ui;zH:2%H');
define('SECURE_AUTH_SALT', 'klz7gn6Ox45@-u6Vj:biKgIx+SR*n9*|wvXQ9s64_8/l3h1/hv-Z1ge~CH*73([v');
define('LOGGED_IN_SALT', '%8TY&XsK1#3e:1mY/jS_N2Mq23WU#Xo[5p6tug!pR33A/K&*6TXx;87m3_6h)P78');
define('NONCE_SALT', '86%_3Y)+3G%m7O_A5xLw05IV83M*6yn&wwZdw/O/40R3y-P5Qft4H7xy6b:f_49w');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'PQ9fzF_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
