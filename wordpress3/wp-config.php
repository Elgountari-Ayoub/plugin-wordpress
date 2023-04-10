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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdb3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Ycode@2021' );

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
define( 'AUTH_KEY',         'Y%]pH.sLD0_u)<]3^ynFAx>;yzp~j?s{<Wq~=.CI;b0t@~Z=hy.jTbCLrERM$&yU' );
define( 'SECURE_AUTH_KEY',  'zut6I,_`C;)5{82S:Ka4661z5P&7(I8BV)[-hbH+Q4;mS/[@kPUN*6B7=YL)k*&I' );
define( 'LOGGED_IN_KEY',    'BN6q{(`h%[DDMUQ~TU:2VaOP),T)l ?oIq<Dx?}TbX79wvph.6}g.csd$GnW<2]#' );
define( 'NONCE_KEY',        'jxeF9k]Zc,m:Gat;YN<4dfTz7@[Ex{Q}[e&vU*oQgf(_j%!-DLaZpMBpwTbT_rN%' );
define( 'AUTH_SALT',        'ps}BL_Y%Q|5pSpBF5]n_yH2Hq=O(-I vGyjU/.mRtAz4} b&l_>eF@I%$cQO#[c?' );
define( 'SECURE_AUTH_SALT', ']Btn(H*#~v3R6R,iC=pSY 1c#0?$bwbV5^=?&?dd;Hj^7Yw3r 1f1&wj3[`8]f`J' );
define( 'LOGGED_IN_SALT',   'U3M-9(UL{&,:G-i1GtOz_o0i]z|b,r.t2}9+:CLF{Jd|ho@v.Ls8~Zd9z]+bP7IH' );
define( 'NONCE_SALT',       'b,@^H/RW?!q_1v5rLs$UaonA`wLCh1t*}hrHs*ym+E&j`Ptri}hCd-B,$?oDnaj8' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
