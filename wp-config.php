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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'O&:FV0r(qYr|7scp#VpAy:&/7p-ri~t@4bj{z!u_6qAfkhjndd(<gi/J`]e,]@{D' );
define( 'SECURE_AUTH_KEY',  'Mp1caBGsF#z]w-,JG!>rbX%]#[-K._[tG1Z>:10w909}9C;rV:@s+o*9o5_+dten' );
define( 'LOGGED_IN_KEY',    'Td}i:x(L+SZ/)2jYuaV1|-ujE*w*x&3}Z}$WJlU~v9F(62?@+%Ka|<;KX^qy$udd' );
define( 'NONCE_KEY',        'R?,aP6N,PUUrKwmz;-`BVN-2Z:b|.K_7I$l|fnXpN|w(L}u&Icjf:l%)H-431POk' );
define( 'AUTH_SALT',        '/Mu+5 qz{7Q0oI(5kH;|9a!IW>ik=llT/Hv|*q^)8PYlY &I>FVH!l-nn!QbiblT' );
define( 'SECURE_AUTH_SALT', 'XAw>[S!Y8PA-xc<?WTQ1e!VHOq1v==BQ}byz y)T ZB8_l*npp*NpNVlp}Fp-h^2' );
define( 'LOGGED_IN_SALT',   'q8:pl2Q0YmZ)$N8RxTE4cD/@q)z,eO$R8`fL:0*J}G/*`XUE:e@,EZah?{{MM*EQ' );
define( 'NONCE_SALT',       'ak5Rf&E~s2KJ@tUCq7(~3<khAGKs5.7QMb&o`>m</jMxzVw2({>zsW~uIx*1,ly:' );

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
