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
define( 'DB_NAME', 'monwesta' );

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
define( 'AUTH_KEY',         'e#qCN4k|Q$?O^++.4[@uRxUUL>(7r /AN}TR;9]@o%X&AuaEW1<=q3Dp5~ql%-r<' );
define( 'SECURE_AUTH_KEY',  '[ZJh*d#|cCB?`r3/$F>@RWCn7B,2zx{P@cZ=ucAb|We{^<yC]D#UvT[cR& V0 pH' );
define( 'LOGGED_IN_KEY',    'l!Q6`p=X,_w<%}YV_c8Rz6l1xi>s!NrvP[>NH3jP=tg~aK6#o+9ZNlZufvMtWz^i' );
define( 'NONCE_KEY',        '^BK))79a3Pr<k1]r<<*-TkYr/_R:Ua(}bj&zSWN)(vIS-#*>MLo<8T+&Hla^[3,@' );
define( 'AUTH_SALT',        'Z<_Tk%Kz{vy:Us7i/8{Lf<ef0V-^)fZkO/(kjz_BnSj,{%%_-FO(DTp<_*V+VPV+' );
define( 'SECURE_AUTH_SALT', 'ustp7Bq9ef?TF,k8;a?%PP@%~fj:xBuy)_AYxpm{Ajkz4@eQ;IO)]qVEZ#$#v)`M' );
define( 'LOGGED_IN_SALT',   '~xuW&&ZRXr+D(h$ w x*o3R_hn=gQftu[~-~}>|WJ|JH u1}2 ?bqMZ:_>6j!9$Q' );
define( 'NONCE_SALT',       'O7>VE3~?ln~[)yM*gYUgIrm]kiq3>#6&U{~ @UJ_{^Gkg`1*`qSvFHBxKdel]Nm`' );

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
