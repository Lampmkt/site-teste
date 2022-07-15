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
define( 'DB_NAME', 'teste' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '4[RiIkm])J/%iAnHLCj+Cib^[uy9YW)8oXOp.:n(,-H3`KD%>?(_1YABU8ef7elc' );
define( 'SECURE_AUTH_KEY',  'Unsq4J03*cCiU_[tKxOfX}g~}Y/>(Ans=Tr>9|BNDOzncMb0-}cSz%?*kx#GJkW1' );
define( 'LOGGED_IN_KEY',    'DVhorRuVRY?^`becHdBMPisB&.{%W:;l(Sud[Y-_VU.NUu~ L{`>H4#lF9fy]qQe' );
define( 'NONCE_KEY',        ')!;2|;he.wW(N<Ha`$UQRZLGNj#`~^#,*Hu2[d|=uIis$}Y,iuhJ2T%xM}@CBXEY' );
define( 'AUTH_SALT',        'a{(zb+f7wMepVnb;T0E(r.xe;Am#qd$9le0ynOkJ<elh}v!|R)vZ%zY  4_)CkZw' );
define( 'SECURE_AUTH_SALT', 'GN#Ntm2hoH##dn$Q%fTdggC,Z)VOM0z9JyN{$GX{)wQ@>WYs(t{FKfE_<HvGDuv?' );
define( 'LOGGED_IN_SALT',   'ov+]?J_D+b:,+,@P~{[7_dT17V.@17u|e=`ENc4LFKs7p>]stV*]Gn!;B6F]j<Tl' );
define( 'NONCE_SALT',       '-_^],C3 ,=73$@?8E{Sicxcjh.Fpv+q_j]1Vv>;%# cJ=!0kSBy<adG,owB1%4 <' );

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
