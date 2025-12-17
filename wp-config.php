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
define( 'DB_NAME', 'u824643034_kHIW1' );

/** Database username */
define( 'DB_USER', 'u824643034_rKxvg' );

/** Database password */
define( 'DB_PASSWORD', 'xpScTRQlAh' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'xPp )f#AV0#|l<MjhZ4Xc#fGr&-SEgdyGgcS 1.x~Jj>y(wV:pnpLMg7$UFw#_$n' );
define( 'SECURE_AUTH_KEY',   ')y@6M|BCvTi1XZv.M:qxCH>=IJd6;s!6dy[9C0.0j{UzvCW1rDzAO!4T#oEd1Q0E' );
define( 'LOGGED_IN_KEY',     'TlYmk9 RQ|[T{wO+ar]<RDMYXq|2briZ.X9_jX|sz-z{R!UF< i**qIVLWN.8H58' );
define( 'NONCE_KEY',         't0#mfN&Mk*PyK3RgGnD?Lcek2~IwM>9P8S.5YVNx/%AHf[x:2zA)/v};&bF;[_-J' );
define( 'AUTH_SALT',         '2XU3>GOT,og7^^QCl%Scv3XJFhfs18vF]ba^jT|b*hVyFo9qHG&rOc7=o+4~e0rZ' );
define( 'SECURE_AUTH_SALT',  '(sG_Z~M]go?)$bR3[qDts0-hoY0CT;nLV`max30F!^l.A%~3Kha#AT3O<v8s(>1q' );
define( 'LOGGED_IN_SALT',    'jBE}TWKzL?~-T<>.&Zy=s<]mxJ.|=m7p9m]i$.SU+eB.W5B7fVkf.OE*-MEKZI|K' );
define( 'NONCE_SALT',        ' uNE)zF?em|!ukHl:$,TKm-0]Pi<w+6>hM&N{`K2(M[,Fh$G8G~L1+p R*;In+$w' );
define( 'WP_CACHE_KEY_SALT', 't=J2bVCHb6yt}KbqsHuc&dW&||OS!0kY(M^Ruz?kP62= =:nJbe;Gs{SqK{,?bIc' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '2d65909109b4a9bd9e58c632504e07fb' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
