<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'techtest' );

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
define( 'AUTH_KEY',         'LI%*];[y0N]WuFO5QdQs:IZdh~9I,!cwFf=- _)]mn4Bo|=zJ*Y,z4n2%o:tcTXy' );
define( 'SECURE_AUTH_KEY',  'a?lNn(]ekoe}pv&okx!#|`6caSX}b,yeiedav_tMi)k|J5xr(~^fu{.Qi.n?ZW;L' );
define( 'LOGGED_IN_KEY',    'VR20z`=w]YqZt:sa,Hr)I-;>P^#a@j,t!y^_m)Y9R(IL4d8uVCgNvyl,0EVF>2lF' );
define( 'NONCE_KEY',        '9-}Z<Nlb<T$I#@.sV/4:NMrj]L@yKL=P.0XX6;sTTw2>$9?1H*T(mFJrr`!Sj>pI' );
define( 'AUTH_SALT',        '@.xH7w!/n#dFXtDP#)r]?vVB9VtT|!LlFp0c9^U:6I$wcDRkWFMWj3dW;HNl&LE1' );
define( 'SECURE_AUTH_SALT', ']/u2W$EsIed>%Hb!.,Q3.9!IO*$zQDheLK%LwCzI]#-N}H&2H<(sRp[`v=U/)o-e' );
define( 'LOGGED_IN_SALT',   '%b{l4E2a4E:B$Rw1AIb{+~j%|752/<>/spfpQ*-]MVDcEh(9sI$d%zSW~,r7+$GX' );
define( 'NONCE_SALT',       '?-o5<%IBo8Ne*o;`O$h:UBu(8*-tS0 NC&3W!z7@PE3}JJqBWi}GKD$rK3wx5_3t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'tt_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
