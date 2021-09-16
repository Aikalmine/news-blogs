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
define( 'DB_NAME', 'news_blogs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '-D9I(}O4/95y]I4LV.>M*K_;2rzwER O*/(EMym:hIPceL6AZGNxUU<CZMV)>F#4' );
define( 'SECURE_AUTH_KEY',  'oRwhPI~TLq}M1rIVD&n<#hUpYo#qPo,raE<K(YkGenqGycEyE+!Agay u<<5y<H{' );
define( 'LOGGED_IN_KEY',    '(o06]T}YgAuuNU_VAhaiXGG,QxpY/T/Bocb~h q`og;`HT!{.UYW_IgM6,)vZ`V]' );
define( 'NONCE_KEY',        'bL<^38}lO_b?h2)}jx@1%/O!T5ttY4|z3m{lJ%E#UY$e5?^j~$:(2qn|`!&e?S:V' );
define( 'AUTH_SALT',        ')<tAeC8xTg{n05BG>eYkXGdt3$Splv-}P`S[8$GBlA$^)TQfIq!>Bs{6W&--%0]t' );
define( 'SECURE_AUTH_SALT', '97~](7t%O{8Af@W7?aH8*%pfZP?w!FyI;VJ2LxEgO(Bvu&F,Ff$?y/?4X5yA/m>h' );
define( 'LOGGED_IN_SALT',   'z_@:Mg {7@swBO*`;Hj0^g4!$@=-mguV+4J:j)K/26KP.%2;4Z*[7CQ $^CHl` %' );
define( 'NONCE_SALT',       'Q`jruaUVM0oI?$Jg-_%V7w,,<xHW7Pg$WK5C]nz.`MwZVLe^?/^N`|xX@xoQ1_|?' );

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
