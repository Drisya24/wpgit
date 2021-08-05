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
define( 'DB_NAME', 'wpgit' );

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
define( 'AUTH_KEY',         ')gy98x*`n97I`@%)fa19nWew(:|ay)e79_ailaMK*q[PB&gUC-K,pbFbutKdxWxp' );
define( 'SECURE_AUTH_KEY',  'zWt{%=;6ZsL4k!Vp;ocd$lW[]b<+OCk;x59oZ}Qlzsas~8.^%c7W`N(rm%Hu1WA]' );
define( 'LOGGED_IN_KEY',    '9]S-wP<ODkzdK,DEK6}iI0pI-G,/`KY z%b]w0e!V0t0+F?REB?GrU3jw*u<`Ptt' );
define( 'NONCE_KEY',        'Qlz%i~D1t)3sYe#J1f)RlL8{/#:Z+C1y*EzZ8E}Mni5aYe~initGLH(nZcnIW**E' );
define( 'AUTH_SALT',        'e6Dmi_WVzA,h4Grych4zn]RK?h4FVnj0wM[kyNW8F{.7ke1D;6.0JccX4>[89aO.' );
define( 'SECURE_AUTH_SALT', '(;/uy&V*c.qJ) A-)DBPCgg;,{_[Z#G?50>7Rz~|LKIv@nQez;hSUey(>yn&}o$Z' );
define( 'LOGGED_IN_SALT',   'wEA9S<Bkp0,_&@t_OemmMX81^ZaZvqGAGOqJ_tF%{r?VUT@2#/_-k5csX Cjmwyf' );
define( 'NONCE_SALT',       'CsO1Qr)$qT#z|Sl>`HL=O`S }/rQx4Ga9QHoRUZ8E{NC*QyLYanPy.z`)Ml8OK}e' );

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
