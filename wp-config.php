<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dcm-lawyers' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b$p1nu)?_pveFxF`yg`z]u?*FBs,2os:g2F$ t)9jD[(SLGMC-}T+0ujd&DsI~p,' );
define( 'SECURE_AUTH_KEY',  '#YA-A.#WV$Sta$G*68uCy|E NEzjL8:TL}*iV#Q320P4?pr3q}rp3rS(CBEXcTXY' );
define( 'LOGGED_IN_KEY',    'P$Xj,; lBNpgL6Qt2RZcq^6[ET5AMv.Ii+96.R}`G= ~6WX(Z3W;p7ZEyH{l`8eB' );
define( 'NONCE_KEY',        'C`EfCCFvJeTMfV[}cOHQ;vN3Fh^2YCDVdkh>=!z%`h%B#ji?<51W(j%6.:ijkNrG' );
define( 'AUTH_SALT',        'R^rittcMKAD9t|eX^nhD$&&%GdM>`,{[&81A`NbU_SDcsH.U=mD`i&i~}yMdIO-/' );
define( 'SECURE_AUTH_SALT', '(FX8?BZ_M$BTTb]%?NHfKM2bne3f@>rj{[Oh/w30c*Hx)~%vx$0@4$_*[}DGw;kw' );
define( 'LOGGED_IN_SALT',   '_t|%qQNn4#jFA)1Um;?RxF29g57I:!;pMX*X]]j{!T_u)4`:$(%dyZVDurwLFrJ.' );
define( 'NONCE_SALT',       'roWNLOD7e>MNX)$,wq76c:)R[]PpKgg9Fcl4?B&g{0Drl{$Ozb(,!eum}`Sj)z_q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
