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
define( 'DB_NAME', 'kontaktne_lece_eu' );

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
define( 'AUTH_KEY',         'x&YF?%0Z!gfo6-CRgCr^)au_<PGjbIpOiLu8B8G1fXN>84-H110) pd~/nTx}rV(' );
define( 'SECURE_AUTH_KEY',  '}qt2];h,l+$67S}Bks1T19{m,)[+}O!1bHGeJfO5Aaa,Ao3tyuGEBXOYRDOG6UKl' );
define( 'LOGGED_IN_KEY',    'Q$,~Hoxr+8!A9],#mBiN:8g)GpOmipj8V60wFpV6>,O*GV)p22h768?<)5t^l>^i' );
define( 'NONCE_KEY',        '`l<sU1kw~_7aNTRUs~7* @sK63yuLb1=b=fBq&[8574EF-q2BQfZ[zs+2c{+LR (' );
define( 'AUTH_SALT',        'd|L)/w1:zF05*]P^?m~HB=%8rg<CQio@h{d]r&4_^=:R+0hYiT4Wh`w#[w]U`-ob' );
define( 'SECURE_AUTH_SALT', ':{_|l%3~K<<I!B=ycIn#sx2_nlO8~V>s(#SX1?hTV)tfyd`5wt3)ITW{:ZQa$mnk' );
define( 'LOGGED_IN_SALT',   'y88z{=Z]e2V!E{w|w!_/&X>:Adh{^gaJbSgjI1n+|U@~P@!j$7kgD :XiXHisSH8' );
define( 'NONCE_SALT',       '<eo*}>*RAhN9B.r8D_5c]sMH:MRvqm2%KQjO2<;;)@IIXr=a6e:Dhd4w~x7$.9[A' );

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
