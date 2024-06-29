<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
define( 'WP_CACHE', true );

define('FORCE_SSL_LOGIN', true);
define( 'FORCE_SSL_ADMIN', false );
define( 'CONCATENATE_SCRIPTS', false );
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
        $_SERVER['HTTPS'] = 'on';
}
 // Added by WP Rocket

 // Added by WP Rocket
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
define( 'DB_NAME', "pimentas" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',          'aeKl_bVWv{fBvz 6=b?C^QGPg=g`it2|fU4:uIexO2[]wf5qVNTnu^ZLvVpGpMT4' );
define( 'SECURE_AUTH_KEY',   'd);-L*cn-8R]xJu_}N8[Ynqd,oQ``U[D.vO~EURiCRtUj#=DP_Y]VIlX]PT#mN*3' );
define( 'LOGGED_IN_KEY',     '4#bS[h5<cNH[mX,<:OaYKj92HgzT_tQq{2G}R?D](wI}&++$tL}iyJ>$5SskSm(0' );
define( 'NONCE_KEY',         'WZ2t 4P-bP>jU%H{bjs|0]t*.wYX999S(AeRtFs.C62sukYuUdhJx,BRGgpLs|Ep' );
define( 'AUTH_SALT',         'o+3@LRPT8a3#`~VclP9^BoFUA1UP2TV4w~EVw+9Y!*LDKao4iF&0*yxjx$tnXXsq' );
define( 'SECURE_AUTH_SALT',  'uK{yUQf-{WmNcr{|O;3uS4<W;Eu9DR6#3)l:@ {fCbp&R$P0gs1U*Iu4_@`/yvn}' );
define( 'LOGGED_IN_SALT',    '^H>VW#mgEpD|Tq_}P>3t/Y*ok: KG,z0.H}J~0I6_()Zl4xdk/]FeX>&SW0?zB$`' );
define( 'NONCE_SALT',        '5v|E;uQl/#0XUKQ-LuS)ST4@gdU;8x:rB,.:%h@vQ/E{&=n)E^q nL|$Nw+N;H:K' );
define( 'WP_CACHE_KEY_SALT', 'F-f%W%K7HAe5VN[XEd||j*~8,->vF&hHwP)rvcnejh`Y6L%#juD2!n(=q~isZ%^s' );


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
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define( 'WP_SITEURL', 'http://localhost/pimentas/' );
define( 'WP_HOME', 'http://localhost/pimentas' );



