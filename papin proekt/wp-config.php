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
define( 'DB_NAME', 'rerihs' );

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
define( 'AUTH_KEY',         '0D%r8D~owq/wja)huK0vUgFftV/?0pOnn5/&7yQ9U*CRd 2d }dBO/p3w0jfO/Vz' );
define( 'SECURE_AUTH_KEY',  'M)T#m2,_QSgZ).Lz>9M*?aR-97YLVuP3ZZ`Xz3!r<H.@?nQLR<M!|La/+Sp4%8lO' );
define( 'LOGGED_IN_KEY',    'n#Dxq-)`=jdFC}wZdqJaA@?c.qD{W@u0B4JP-%+R9!bn<Bhhwf%,Xiz?cumvA$XU' );
define( 'NONCE_KEY',        'xzO^:T_ueb65iCmfG?2vH&T_.By|eYtiWEgmhV1MNrDWBjq9KK[|PMFZM:$jek08' );
define( 'AUTH_SALT',        'j2Hd@v00^Tv2^M:&.+Tly~4E!P;/N,%^YVCHiv*+D3>EML<:USs(0w575P++84$F' );
define( 'SECURE_AUTH_SALT', 'nirNS2%H.~{a+I%9l{fxed4gv?w]XcB+qU+0#SH94/!fa{*mRC@zJ*RbS/Ue35=o' );
define( 'LOGGED_IN_SALT',   '9]cFak1VxSU__P+6ezn_zfD00fcNI*r~&8@sxPtVJxT):}!x,BQ%eXi;[`tXp)(J' );
define( 'NONCE_SALT',       '|c+~0,QkKsf@8IW,pf[.t{{$[K}JL.md7cFXUkEUMSI8O,YGlyLIX@z&Elm]&{Jq' );

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
