<?php
define( 'WP_CACHE', true );

define( 'WPMASTERTOOLKIT_ADMIN_EMAIL', 'communication@deuscom.fr' );



define( 'RELOCATE', false );
define( 'WP_SITEURL', 'https://sitederencontregratuit.com' );
define( 'WP_HOME', 'https://sitederencontregratuit.com' );
define( 'DISALLOW_FILE_EDIT', true );

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
define( 'DB_NAME', "gefo7278_srg125" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'Rc,c3af@OY6>M4Mc.:aVUu*sm+Qa+P_+1F/Y766c OC13>@PksM5k-M*ix2-.`m<' );
define( 'SECURE_AUTH_KEY',  '-iVr+K/LNs2D9-1-iAydJ-6uFq5kAo`[%>:H=KM%:E6D/k#ehXtBJ={OXxdz`FT-' );
define( 'LOGGED_IN_KEY',    'GBZ*=$g+cyqh-Qr@dx&`=CE70$wW3MU7{Xy*u.O,tVi<oy-~Ts]HJ2C_6f]l9Ha8' );
define( 'NONCE_KEY',        'b$ZLjxs|UWy%T`V-|AQ|:%42A,312T~*3yjK7Wd$A`-k&x%H[:vDJZX]q:vi_>I3' );
define( 'AUTH_SALT',        'h}K:b^t]yEu2+O5z<nffclri VT~+/WoH,{G/.-p!EaB*LBT_zYG/BOR-q+$d$/H' );
define( 'SECURE_AUTH_SALT', 'kLk1!?+BXfQdrFy+8P-~*@fJ-Xz]FIWL!Jy[h#c4s?XeaLblK#g*u|Z,RSvLJoGp' );
define( 'LOGGED_IN_SALT',   ',9{3*7nkA3zv%1,r1vK@iT+UT|:tVOqKce~h,+r:fY3w.>]If*uID}U.lJdsT*N&' );
define( 'NONCE_SALT',       'xlK9ZG<uXo<Hqh7z@PH+.-pE4&]>3Xib!wveU?.o0lHB{<c*V!Q!BHDIdAZoF44!' );

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
$table_prefix = 'spiy8_';

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




define('WP_MEMORY_LIMIT', '512M');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
