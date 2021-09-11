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
define( 'DB_NAME', 'news-blogs' );

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
define( 'AUTH_KEY',         'Q}Z=dY|U<.WNx Ii}0w/PCuEmKA ?klZ;GW;5!ep2=8dkh>z)N?Go)yst+a.ZL]3' );
define( 'SECURE_AUTH_KEY',  'i%&9pRMA<;a42mMp4#K^e!jG!@<rI1m~)7m1({+*yzM qX@r6cYv!.5dg0jpu4D!' );
define( 'LOGGED_IN_KEY',    'l`bS+3npn`J4qAs|~nzdS%QPtAkVgdDpR]z l=caH,?&o.lMBz|6P[T6h>bvMg-`' );
define( 'NONCE_KEY',        'Q^xkJy5j$Wak#,s&%$hq{k9b.],vE/17yNaUvS{5K8BAyccdN|~Hk7IN$UAVUdMw' );
define( 'AUTH_SALT',        'X]N2MKOYj|BZG {VwBc7R8mYd# H=X,N@dNo!zFm8r*W>IYz^s]B_*Z!dsH&@)ah' );
define( 'SECURE_AUTH_SALT', 'Z&ep?%WCPg(pE] HQ]T>t1vR]+ol5M3R)M|kB:S}4.!HLA&VzJj8;*RUU8P`L<b!' );
define( 'LOGGED_IN_SALT',   'oG=+T]dQ6}$@(wEP90h,c~poTf t*r[UO.Qi5>2H9<jPkL7,:GEol~4bKH5bu563' );
define( 'NONCE_SALT',       'XqCJ*d}WTftU7u#dnQ!Zu>Gy#L?Z![/_KwjGs9Q8sH/<9O)-s>S6RW-byE!r 9WT' );

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
