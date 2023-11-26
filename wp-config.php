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
define( 'DB_NAME', 'prueba-sebas' );

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
define( 'AUTH_KEY',         '}Q1WLsGCc>U*/|[(k.:JtD|*8.!5+;cfD ,+va(6O8tw-RN5zh,XhsCmbE^+#*Vm' );
define( 'SECURE_AUTH_KEY',  'QJu8c6ONGt(q9N1i@R@X-0/x0MJCnm2ERA&7^bf;KK,rfR@M.9umbNa-~sI/HBML' );
define( 'LOGGED_IN_KEY',    'yH&kue(`unw@$L>2$X<$?Y.*yOU{k[|#SVdzTX{EJS7QH.p?Jf-RGM/w[;)wzY~&' );
define( 'NONCE_KEY',        'fa~R,~}$^Jgxyw$G)1]7.!DRp]|pkD3z3 fs6s!]Cw$O;c>SM7/3c.aEOsm$QHUK' );
define( 'AUTH_SALT',        '0<HkG~SJ=;-fc_I^&.|bjgLd]mYGl/9Z+}~SV[`C]x1ay-{Z;kW0GREXnbqq^/g@' );
define( 'SECURE_AUTH_SALT', 'KNn^<F-%}{HFqWSZH#>E| J+.jnci!B}vEOT!RC!DkKh98C}Z$-XCyo?UT<#]ZPT' );
define( 'LOGGED_IN_SALT',   '[LlWdr.r,X|78*C+pyhsjy}Qy;lcnFq|H_6X!tNG#iAP<^5$ZRl@@%Od35ei0uz!' );
define( 'NONCE_SALT',       'mF}LE~-1<d)_jd2CTB3^hEirYj5v@LrqZ@Wk3U*~Fj:g%%Cf<=e3~FIY;TGg-[z.' );

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
