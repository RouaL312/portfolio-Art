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
define( 'DB_NAME', 'portfolio_rawenne' );

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
define( 'AUTH_KEY',         'n4Q$B *6Ktg5%&L-7/-4yVX!2t,b102V>ca(Bwrtg{c_(I@=Kj<^?*5F+ag=F$r>' );
define( 'SECURE_AUTH_KEY',  'CLN$fJ)u0iMr(n`:,;2vibJMf4`ov|wn{ks?xMJB4)81Ix;YT0Z=z6|GR9+fZl@{' );
define( 'LOGGED_IN_KEY',    'i<^WeO^5(8R72?~ YEN8!omD&1z8pLIWq&,[oW%2BX0e_WdNdg_3}p<2L>|mEEn<' );
define( 'NONCE_KEY',        'P4*0e2{)D1<q1ca*_C_K,ib*w=1WV-TOic[h[V2Fj1sL6/z(W)fsaV)A`{Fj(8U#' );
define( 'AUTH_SALT',        '/L/Zmd]N4ECQdkiP-n`tt4;>kY>/;9bX B<yg4b-JW#+~O-,t6-mjnIC*x.dI14_' );
define( 'SECURE_AUTH_SALT', 'R%WDv!A*9E8m<7K35:Q}vTFWz0_4qbI3<MX`5~$iG/XSCF`2Sjx Fv#D=fbi)3&9' );
define( 'LOGGED_IN_SALT',   'oUT?zF(fHOrOSWnJ(^[osCyv^Et~w>mI/c,m,}..i)(XUl 2%D<{eNh^b9>(Tm5w' );
define( 'NONCE_SALT',       '8SIU7C3C!SO}c=!>)3?_v_O|jR+h4`#&`NN,{DJt}eG+N8guAGUJvpP.R@L^[kL/' );

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
