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
define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Shiva' );

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
define( 'AUTH_KEY',         '%[Y~cyFuz}avVIE?m71/iv6PIFKVTk@r=MJ&[H5W7jWto46`Rl3m_e.1J`=Cgp}F' );
define( 'SECURE_AUTH_KEY',  'M*ugIbjtKU,nTqeOx+f|6I+A*D<,3E,AtUjUq@TCx)x&4_V=biyQKaba*e3tV]XX' );
define( 'LOGGED_IN_KEY',    'OSTvkV?Fl:#^DC^argf!p;i#g? w+MVST~oci^n)!3DRBt/Ft9,GXaXBb%/Tv?&G' );
define( 'NONCE_KEY',        'e8{T]j*{#N=x`j B>S7;M7=dOL?idfkA_NK;x0^#.96-x{>flF#W%C3F`C<7<:rp' );
define( 'AUTH_SALT',        '2g9{*>t!P*92>H73i~sCel@N>hT8%.EJ:f8zB;DJn<&P`dI9+xg3>#RSMHc|66->' );
define( 'SECURE_AUTH_SALT', 'K6Q:xoqyL.P}+qv04nTf;f-kE`H`J1gh`@GhpUs/N2b%`j[O/qo}^9u:`v=}JK2n' );
define( 'LOGGED_IN_SALT',   'fmDn0Q%QC$[LouT+yOyNHo=8:-S^z:bHa8X?U>`eo S| mfRw:99YntwcNB/k9J5' );
define( 'NONCE_SALT',       'qK64;ovuvLE=k<7XzFikr:U0I paaWP/4ie#^c%cOdeB9n}m4Q]o+JLN2G%F8a?L' );

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
