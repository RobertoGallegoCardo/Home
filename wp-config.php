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
define( 'DB_NAME', 'robertogallego_db' );

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
define( 'AUTH_KEY',         'E[.dh@4+~Vy2C!cu,zw+tYF=@.8D4m.;{N>F1m-#UfGFo]&<P@|oKvTO3x9~=}wX' );
define( 'SECURE_AUTH_KEY',  'cPPLTcd0v!jAbvfW=+/D+^c?8mYE9H146nDT[m~MlgfWfrIl@!JhC[#VWZ Hw}0!' );
define( 'LOGGED_IN_KEY',    'osTiq;CF}it@_uV}3 %=p|,&kifu0@ktY9@T|h;enVZ/$IAa$b!W6M2x4y7QSfix' );
define( 'NONCE_KEY',        '![BlnuO7$A<t4S9f]16$Ov.Qr`t2IOC:8U|txiS5ci8kwT!87$`lG3&snXmxvZvm' );
define( 'AUTH_SALT',        'Zxo_$n*oIe(DVXW k2DtjdTG2eeV7W*Uto2Oa$7P[?[}Aqx4i0,B2W<]hP/M;n)]' );
define( 'SECURE_AUTH_SALT', '>rODtf{e$7)&k<4.~9b`/Fur2S`zgDV8trD@Sb)E/WmnV-1i{.>K= -&CW9=tK.P' );
define( 'LOGGED_IN_SALT',   ',x!`}L$z7Kl27?r=X|Uc/t8BXn9^N([:a>~h[qg4@3KKaxb*V! 5Q}{X{2,r,VK`' );
define( 'NONCE_SALT',       'xz,({&2W$q[nU.FYPlKWx]*7(m{tTbIO_L S;A:9cZ7!0D:Nj5(nVX]R}v@at!V[' );

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
