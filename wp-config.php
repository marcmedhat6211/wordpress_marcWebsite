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
define( 'DB_NAME', 'wp_marcWebsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kokowawa' );

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
define( 'AUTH_KEY',         'ESH`D~asyBAf(>t2PBO%2^zX4VD{scH1MW|_{f{FZRA7f{Z2AbaX.Jy8;@0<;#q*' );
define( 'SECURE_AUTH_KEY',  '2oKVVRxaWNGCkm2?-dVv`!e}QlB.2z>|azfvj*WNY}i&%F8.5+6Ke{Ihfw1Dn%yu' );
define( 'LOGGED_IN_KEY',    'F.v4q<BsnvK@ldrgwk vkZ 0RfCSfK6*bw7G0Cn5 sIqSaL~DO#)YnQqN7drG2:a' );
define( 'NONCE_KEY',        'SKT4G;>5v^>MD1`7g|Tk{,W8.;P+B/z(A_dc8Nd@*!z6={HW3ai+->OGa2$gxOkQ' );
define( 'AUTH_SALT',        'fwt;r5vv(FInorGYjA~N0wb4mgx!b)kR-Gf=Ac*sOO?orYy;+P*qoC~JlQ]_Y-x%' );
define( 'SECURE_AUTH_SALT', '_C%z`W2MgF,$3.gy?zERod/Xo%J/kWVd|y?`R3;]Z,VVWF0wiT4&%z+!k/9TzSjZ' );
define( 'LOGGED_IN_SALT',   'O6[y,]oHGg[w2oMqj&&{b#tA<?UBvm U+SSdoSOrSc.FOgbU_adJJ%NUMJJ(W=9p' );
define( 'NONCE_SALT',       'BdEveQhn2fQI6E;<5-Cz+IlAADz7>30yRu_F8E?11~OKYF *mtk9Lsk?f3=e;75/' );

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

