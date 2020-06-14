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
define( 'DB_NAME', 'raffles' );

/** MySQL database username */
define( 'DB_USER', 'raffles' );

/** MySQL database password */
define( 'DB_PASSWORD', 'raffles' );

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
define( 'AUTH_KEY',         'UdI~&3oK_Vo(p8n)+Rvuz>hFo8X2=qcCokZ{.HlvHfueOZ*N/@EIK*~WAB~=Xk)G' );
define( 'SECURE_AUTH_KEY',  'sb+_J82nMswbTg<u=Lx6#m!M$-DOGyn{1H_V9`wGuU@dPjSgzHcB; #b<r9x${&~' );
define( 'LOGGED_IN_KEY',    '[i|A)HypT{mo*GFfsZ;4@Gie8EbMi?Ki{yPL&E0C3(o2o22? :4LnFmp7d_c#dU1' );
define( 'NONCE_KEY',        'Ke^K?oVOd>=8(9a!EN_WCoiT/,M/Eh#l rQ44oJ_nNeq37>47coIL}XG5mq~YZ+B' );
define( 'AUTH_SALT',        'd:eQockA!!*n-4i~!ADw!)V$+DZD?{TCofV|3A^J7E#p<H@0~f_Nuy.KHZ_6H%WX' );
define( 'SECURE_AUTH_SALT', '>Gu%9QGIFLq(xJ8;fvD}z;(q?PsC?]k~h_yDxgQ*$LHX~6NgOcO|J<R}4dhz7J/6' );
define( 'LOGGED_IN_SALT',   '~2KT`/cdn9VIIoN&i4cqkdAKr[!^`p$qszqRAgr[W>$wk5?S]ajN{*;364`Oj.wu' );
define( 'NONCE_SALT',       'LUK=uSsWphY^Rye/fBr;Vb{C7S+nLMq3HV-1,cp@A^%jj$3R7B]h{i}dphqH@Qbt' );

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
