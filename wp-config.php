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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xevent' );

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
define( 'AUTH_KEY',         'W^lsR]770q2hqykRr; FGeDw8| 3,]7seGT^J;U<(KJ/&g[3S7[iPXOx0Kj00-Ig' );
define( 'SECURE_AUTH_KEY',  '0|~$#u/;{3DUNMBm] (hovK|PO.AdITs%-(K+dg,:bFE_<R@_rT vv#JxUsjrfgc' );
define( 'LOGGED_IN_KEY',    ' $|[ +OE<mQ<c8e,T=N`B,|$vqV:QNQ;?W 4Cljht>v(ap1*9~#mv|m7u5t.14f&' );
define( 'NONCE_KEY',        'eA68m5OH^zqiU]`Gb~SVPe)BvN1j0$j+Fh`RIX%pPX&Li&UE*$CI`GjV%d%M]Ul.' );
define( 'AUTH_SALT',        'fPz!8ZUy-vp(Rh#r.+ v>8nrZTP7g2CunkVXu]siV;?yuAj]i-Y`kVHL?F$Zulpu' );
define( 'SECURE_AUTH_SALT', 'oLhh^cb@4{Or?0QSI%&(mnQ3&6X!D8TUSs%5N?`-77~>YShlgY5bVf{{iGlI,oG5' );
define( 'LOGGED_IN_SALT',   '*naftdlgzk$jomb*CKp*<#7m1+2F#xE/-|Z2,}%gvxV(a-u*w9Ofn`uD)wF3)av.' );
define( 'NONCE_SALT',       'C}s_@)FL!9bKW)`3AS-DFOJWHt$ 0,a!BDX&%f9-:27rA`bz#,y%c)@Z9e*T(t)+' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
