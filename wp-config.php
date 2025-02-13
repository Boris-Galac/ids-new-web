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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '#YEEMb=wA=~4~prkkTaQ,aJ^#+ %k-?:ewSG]Bh?al6haldEI%%EKp^_)^-{,x/q' );
define( 'SECURE_AUTH_KEY',   'tM [el(8`Y!&o+$`2*d1fF 9aQ~NJ:l+(3I2y8.#$vNX52e8e1iYa,!A8`j4QAu.' );
define( 'LOGGED_IN_KEY',     'US!rWQg`)F#>)vh;e^GlY>k4)5o`OnLt.4Aw_uU({.KPe JS?iA&TZRj0~8l.z6_' );
define( 'NONCE_KEY',         'MY)+dB,~)Az$d%|O0S4>g-1lb!:a0U%0.kbOk{Kd{DaA3O[a-j,.7~,<{V9(q_.]' );
define( 'AUTH_SALT',         '?GoTGZ y}SmE.kk*j}0)gf]E2(bHM:A3A]Xv/;-ZP8c@+iKGLcV[Q,p #j[peTkO' );
define( 'SECURE_AUTH_SALT',  'EoyMYN ]_K:Q*F<f#8VQ!&.G4%t/Ci4xYRp{kU`B[I$tcr>9s=Kumqn~!*kS7jo5' );
define( 'LOGGED_IN_SALT',    '76#js?n2K+R1>TQbNC&R)cYR66EcmdL-E:@;kd7R&QR:DTR>$i2Rv{&<|@cl.RNC' );
define( 'NONCE_SALT',        '#mWuF2^o={y ka!s4OF|1| vdmvhkQ&|+umu:z2{bN`wCMY0PvJ8KP]a/h:AX*ti' );
define( 'WP_CACHE_KEY_SALT', 'Fa0{8GUp3) ?gj|A{vm}JA|X@YJE4S1].e]K)w1 <X!]8l?QU:bnT7h]f3Cy(5jV' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
