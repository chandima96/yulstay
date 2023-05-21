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
define( 'DB_NAME', 'dbyulstay' );

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
define( 'AUTH_KEY',         'O24CDvQ3pQeN`xt0T,i|yTM&)2&6?:DXU7;Y3KSZbj]rd(ayB<Ti06l]w^ls>]h,' );
define( 'SECURE_AUTH_KEY',  'X-r{BkN][v~{*2M*K_HZf`5rc.dKZ,d/#s!-p<#1=9a4lI$V5X=[2PvQd5J_SD{U' );
define( 'LOGGED_IN_KEY',    'C&Gv<cH_dqNjcHu% #Sd+|Rhn;?KqRmbV&tY{>~B|YJm!WrXe1ntHuJve:V,sFke' );
define( 'NONCE_KEY',        '{xI9~=bNpuh`?lj|8n03S2WMXfS%0L3PDeA8}_}!RAQ6}j7>;ol9!<8SJ}B.U!Ws' );
define( 'AUTH_SALT',        ':R,?.jm7+*E=!`x,TuxUs?VeI;]+^)7^^Dn?)f!oqw;DrX:p>n/ilCw8_wqYp,ey' );
define( 'SECURE_AUTH_SALT', 'D2O[YDdK1l#]YS`vFEJAR%5?=7B,zL#F=*_7}l;{/5=,z]]_m%wjYJzQ0r:ltpec' );
define( 'LOGGED_IN_SALT',   'X)9$GwiMabDgV%IyuU0>T1U(-_p:EgNDTPO]*kbf(@iLef+0s>&b*:)|zn=3>|US' );
define( 'NONCE_SALT',       'tf?N9{aZ*b=zb>jkhXvX~Cn)m&WOby8rYC`jy d!_FF#VFo-=BPPh`G@/:f%_,({' );

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
