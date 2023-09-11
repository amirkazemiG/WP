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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'petdb' );

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
define( 'AUTH_KEY',         '-No]z24DX%74H]<Jh`. 334X?7XuTnQm4kB3+8vo36V0L:K$8-lP<AXcx-5B?DYk' );
define( 'SECURE_AUTH_KEY',  '4?UOvql_.ZSRx8Z?cuv&is6%vw^2)BTyXyK=_<L[}$]jmip&dp5$>:v-cbWrZwCi' );
define( 'LOGGED_IN_KEY',    '?^Xd/]vQEH/GcqbzjxAC)F&lE28-[y#LA*6Q=|>q=Fms,U?D32d^Uh&/H_;6{yFJ' );
define( 'NONCE_KEY',        '.+Dn9-,a+Xm:N-^$Zh>[)B18T4U,F8(e}y,(ZNU5WRA_d:g$>Lv4KHu+x(W# r]i' );
define( 'AUTH_SALT',        'RKo|+dA&tK &T_ImxDLj5cDnM>1iNBC}!JhEdx+ $&by4iE|<rGktZ( eJxG,sW-' );
define( 'SECURE_AUTH_SALT', 'WuDbSP/`@xin;Kgw[+P{Z5HuJI=YbM`ug)*! IU08.ePk3i;TTR!:UO5w4<M3?v?' );
define( 'LOGGED_IN_SALT',   '#Dr,EhEOgZ9#ZNR>%BgXsV?Ms/cT]{`@)r((FEy=FXIdsLPz]!,BaLdP[|NmO:.z' );
define( 'NONCE_SALT',       ' ?v2ogKGac|`4iR>5AuEf}}?0_SP-=P:o.|dmPFF)alhadIWohgp!#*>s#KAN^:2' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
