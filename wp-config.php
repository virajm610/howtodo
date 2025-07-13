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
define( 'DB_NAME', 'howtodo_db' );

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
define( 'AUTH_KEY',         'd83Pp;lFJv9[tcfl8#n|l5{53ehcAX%z3u>=m<Y.;(?K3G%ErW*a F[n5Q})hxJ>' );
define( 'SECURE_AUTH_KEY',  'h5nUNwDq$4ee[.S3lUNV61xPhS$AI*sD2`UJ%wQ5COA@deujGZwmiXq+EVw8jXGl' );
define( 'LOGGED_IN_KEY',    '}<>bk)>Rz;>dxL^Uaj,qqz6A`4zx:Fk49_xXds~K{W[`6oAYWp;RoxAP;n$VE]]*' );
define( 'NONCE_KEY',        'J;90pt=noFAZlsv-HWSGu`WZd+#QCW{%:!~$eX+_u4FnXncMf~1fP]/NrJBVAzFH' );
define( 'AUTH_SALT',        'W_^5s+RDq;XoIT>ey<jx[_-_&lc1/NlV~O,p`Td7.7gU&/bL,%i<(%JK$GKjvX7~' );
define( 'SECURE_AUTH_SALT', '8,F547|e[3m$3k4D0c&t9@mZi^o{HS}K,AJSZx0>j99wC8.T-%G/[/hr%7p2gxEd' );
define( 'LOGGED_IN_SALT',   'FXp?k)D?b1jv3d=En4$ggGf:pD;kiDi9IB!~M4R~tvReB76w%g^j>F4&j;~9:*j_' );
define( 'NONCE_SALT',       'X*/yiv3j 3,uEZk>!ZBv( jJOSY}z9/H!zB0:IS0y[FHFFAMzU<s,.*4LQDJ5&`F' );

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
